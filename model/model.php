<?php

class Model
{
    protected $table;
    protected $db;
    protected $conditions = [];
    protected $orderBy;
    protected $limit;
    protected $insertData = [];
    protected $offset;


    public function __construct()
    {
        $this->db = (new DB())->connect();
    }

    public function where($column, $operator, $value)
    {
        $this->conditions[] = [
            'column' => $column,
            'operator' => $operator,
            'value' => $value,
            'logicalOperator' => 'AND',
        ];
        return $this;
    }

    public function orWhere($column, $operator, $value)
    {
        $this->conditions[] = [
            'column' => $column,
            'operator' => $operator,
            'value' => $value,
            'logicalOperator' => 'OR',
        ];
        return $this;
    }

    public function whereIn($column, array $values)
    {
        $formattedValues = implode(', ', array_map(function ($value) {
            return "'" . mysqli_real_escape_string($this->db, $value) . "'";
        }, $values));

        $this->conditions[] = [
            'column' => $column,
            'operator' => 'IN',
            'value' => "({$formattedValues})",
            'logicalOperator' => 'AND',
        ];

        return $this;
    }

    public function orderBy($column, $direction = 'asc')
    {
        $this->orderBy = [
            'column' => $column,
            'direction' => $direction,
        ];
        return $this;
    }

    public function offset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    public function limit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    public function get()
    {
        $query = "SELECT * FROM `{$this->table}`";

        if (!empty($this->conditions)) {
            $query .= " WHERE";
            foreach ($this->conditions as $index => $condition) {
                $value = $condition['operator'] === 'IN' ? $condition['value'] : "'" . $condition['value'] . "'";
                $query .= " {$condition['column']} {$condition['operator']} {$value}";

                if ($index !== count($this->conditions) - 1) {
                    $query .= " {$condition['logicalOperator']}";
                }
            }
        }

        if (!empty($this->orderBy)) {
            $query .= " ORDER BY {$this->orderBy['column']} {$this->orderBy['direction']}";
        }

        if (!is_null($this->limit)) {
            $query .= " LIMIT {$this->limit}";
        }

        if (!is_null($this->offset)) {
            $query .= " OFFSET {$this->offset}";
        }

        return mysqli_query($this->db, $query);
    }


    public function insert(array $data)
    {
        $this->insertData = $data;

        if (!empty($this->insertData)) {
            $columns = implode(', ', array_keys($this->insertData));
            $values = "'" . implode("', '", $this->insertData) . "'";
            $query = "INSERT INTO `{$this->table}` ({$columns}) VALUES ({$values})";

            return mysqli_query($this->db, $query);
        }

        return false;
    }

    public function first()
    {
        $this->limit(1);
        $result = $this->get();
        return mysqli_fetch_assoc($result);
    }

    public function getArray()
    {
        $result = $this->get();

        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    public function when($condition, $callback)
    {
        if ($condition) {
            $callback($this);
        }
        return $this;
    }

    public function update(array $data)
    {
        if (empty($this->conditions)) {
            throw new Exception("Update conditions not specified");
        }

        $set = [];
        foreach ($data as $column => $value) {
            $set[] = "{$column} = '{$value}'";
        }

        $query = "UPDATE `{$this->table}` SET " . implode(', ', $set);

        if (!empty($this->conditions)) {
            $query .= " WHERE";
            foreach ($this->conditions as $index => $condition) {
                $query .= " {$condition['column']} {$condition['operator']} '{$condition['value']}'";
                if ($index !== count($this->conditions) - 1) {
                    $query .= " {$condition['logicalOperator']}";
                }
            }
        }

        return mysqli_query($this->db, $query);
    }

    public function delete()
    {
        if (empty($this->conditions)) {
            throw new Exception("Delete conditions not specified");
        }

        $query = "DELETE FROM `{$this->table}`";

        if (!empty($this->conditions)) {
            $query .= " WHERE";
            foreach ($this->conditions as $index => $condition) {
                $query .= " {$condition['column']} {$condition['operator']} '{$condition['value']}'";
                if ($index !== count($this->conditions) - 1) {
                    $query .= " {$condition['logicalOperator']}";
                }
            }
        }

        return mysqli_query($this->db, $query);
    }

    public function count()
    {
        $query = "SELECT COUNT(*) as count FROM `{$this->table}`";

        if (!empty($this->conditions)) {
            $query .= " WHERE";
            foreach ($this->conditions as $index => $condition) {
                $query .= " {$condition['column']} {$condition['operator']} '{$condition['value']}'";
                if ($index !== count($this->conditions) - 1) {
                    $query .= " {$condition['logicalOperator']}";
                }
            }
        }

        $result = mysqli_query($this->db, $query);
        $row = mysqli_fetch_assoc($result);

        return $row['count'];
    }

    public function sum($column)
    {
        $query = "SELECT SUM(`{$column}`) as sum FROM `{$this->table}`";

        if (!empty($this->conditions)) {
            $query .= " WHERE";
            foreach ($this->conditions as $index => $condition) {
                $query .= " {$condition['column']} {$condition['operator']} '{$condition['value']}'";
                if ($index !== count($this->conditions) - 1) {
                    $query .= " {$condition['logicalOperator']}";
                }
            }
        }

        $result = mysqli_query($this->db, $query);
        $row = mysqli_fetch_assoc($result);

        return $row['sum'];
    }

    public function whereToday($column)
    {
        $today = date('Y-m-d');
        $this->where($column, '>=', $today . ' 00:00:00')
            ->where($column, '<=', $today . ' 23:59:59');
        return $this;
    }
}
