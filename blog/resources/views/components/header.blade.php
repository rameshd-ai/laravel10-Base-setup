<div>
<a href="{{ URL::to('/') }}">Home</a>
<a href="{{ URL::to('/about') }}">About</a>
<a href="{{ URL::to('/contact') }}">Contact Us</a>
</div>
<h1>{{ $title }} Page</h1>

<h2>Current URl(without parms): {{ URL::current() }}</h2>
<h2>Full URl (with parms): {{ URL::full() }}</h2>
<h2>Previous URl: {{ URL::previous() }}</h2>