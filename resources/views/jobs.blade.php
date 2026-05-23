<h1>List of available Jobs!</h1>

@foreach ($jobs as $job)
    
    <a href="/jobs/{{ $job['id'] }}">
          {{ $job['title'] }}  <br><br>
    </a>
   
@endforeach

