@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<?php 
				echo($current_lesson->lesson_material);
			?>
			<div id="page">
				<a style="padding-left:4%;" href="/test/{{$current_lesson->course_id}}/
					{{$current_lesson->id}}">Сдать тест</a>
			</div>
		</div>
		{{-- <div class="col-md-3 lesson-ul">
			<ul>
				<?php 
					foreach($all_lessons as $lesson){
						echo '<li><a href="/lesson/'.$lesson->course_id.'/'.$lesson->lesson_number.'">'.$lesson->lesson_name.'</a></li>';
					}
				?>
			</ul>
		</div> --}}
	</div>
</div>
<div id="footer">
	<center><p>Тоекин М.Р., КазНУ им. аль-Фараби, г. Алматы, 2020 г.</p></center>
</div>
@endsection
