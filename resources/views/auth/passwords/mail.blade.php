<h4> Hello {{$user->first_name}}</h4>

<p>Click here {{url('resetpassword/'.$user->email.'/'.$code)}}</p>