<?php
require_once 'constants/card.php';
require_once 'model/user.php';
require_once 'constants/user.php';
require_once 'model/course.php';
require_once 'model/lesson.php';
require_once 'model/enrollment.php';

class SearchController
{
    function searchpage()
    {
        $search_course = (new Course)->limit(6)->paginate(6);
        return view('client.search',compact('search_course'), 'default');
    }
    function search() {
        // validate_api($_POST, [
        //     'keyword' => ['required:từ khóa']
        // ]);
        
        $course = (new Course)->where('name', 'like', '%'.$_POST['keyword'].'%')->when($_POST['sort_by'],function ($query) {

            $query->orderBy('price',$_POST['sort_by']);

        })->when($_POST['sb_author'],function ($query) {

            $query->whereIn('user_id',$_POST['sb_author']);

        })->when($_POST['sb_offer'] == "0" || $_POST['sb_offer'] == "1", function ($query) {
            if ($_POST['sb_offer']=='0') {
                $query->where('price', '=', 0);
            }
            else {
                $query->where('price', '!=', 0);
            }
            

        })->when($_POST['sb_category'],function ($query) {

            $query->where('slug',$_POST['sb_category']);
        })->limit(6)->getArray();

        return api(['status'=>200, 'data'=>$this->convert($course)]);
    }
    function convert($data) {
        $results = [];
        
        foreach($data as $item){
            $results[] = [
                'id'=>$item['id'],
                'thumbnails'=>$item['thumbnails'],
                'name'=>$item['name'],
                'short_description'=>$item['short_description'],
                'price'=>$item['price'],
                'discounted_price'=>$item['discounted_price'],
                'user' => (new User)->where('id', '=', $item['user_id'])->first()['name'],
                'lesson' => (new Lesson)->where('course_id', '=', $item['id'])->count(),
                'enrollment' => (new Enrollment)->where('course_id', '=', $item['id'])->count()
            ];
        }
        return $results;
    }
}
