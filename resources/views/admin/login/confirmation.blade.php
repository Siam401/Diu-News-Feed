Hi {{$user->name}},
<p>Your registration is completed. Please click the link or get access</p>
{{route('confirmation', $user->token)}}