<?php 

class PersonController extends BaseController {

	public function pageMake()
	{
    $people = Person::take(50)->get(); # todo
    return View::make('person', compact('people'));
	}

  public function save(){
    $person = new Person;
    $data = Input::get('person');
    $data = self::sanitize_empty_values($data);
    $person->fill($data);
    $person->user_id = Auth::user()->user_id;
    $person->save();

    return Redirect::to('person');
  }

  protected static function sanitize_empty_values($data){
    foreach ($data as $key => $value) {
      if($value == ''){
        unset($data[$key]);
      }
    }

    return $data;
  }

  public function delete($person_id){
    Person::destroy($person_id);
    return Redirect::to('person');
  }
}
