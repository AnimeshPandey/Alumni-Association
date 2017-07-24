<ul>

	@foreach($student as $stu)
	   <li>{{$stu->name}}</li>
	   <li>{{$stu->roll_no}}</li>
	@endforeach

  </ul>


  </body>
  </html>