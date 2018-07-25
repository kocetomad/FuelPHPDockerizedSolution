testDB1
<?php
use \Model\Employee;
use Orm\Model; 
class Controller_Employee extends Controller {
  public $template = 'index.php'; 
 
   public function action_add() { 
        // db based sql command to delete all employees 
      $Longtitude = Input::post('Longtitude'); 
      $Latitude = Input::post('Latitude'); 

      $query = db::query('insert into table1 (Latitude,Longtitude) values (:lat, :long)'); 
      $query->param('lat', $Latitude);  
      $query->param('long', $Longtitude);  

      $query->execute('production');  
 
      // orm based query to add new employees 
      /*$model = new model_employee(); 

      $model->name = "john"; 
      $model->age = 25; 
      $model->save();  
      $model = new model_employee(); 
      $model->name = "peter"; 
      $model->age = 20; 
      $model->save();
      
      $data = array(); 
      $data['emps'] = \Employee::find('all'); */
      return Response::forge(View::forge('welcome/index'));
    
} 
}
