<div class="body_content">
  <div class="box_4">
    <div class="heading">@yield('title')<a class="right" href="{{ route('hk_createnews') }}">Search For a Room</a></div>
    <table class="full normal">
      <thead>
        <th>Room</th>
        <th>User</th>
        <th>Message</th>
        <th>Date</th>
      </thead>
      @foreach ($chatlog as $chat)
      <tr>
        <td style="width:25%;">{{$chat->room->name}}</td>
        <td style="width:25%;">{{$chat->habbo->username}}</td>
        <td style="width:25%;">{{$chat->message}}</td>
        <td style="width:25%;">{{date('d/m/y h:ia', $chat->timestamp)}}</td>
      </tr>
    @endforeach
    </table>
    <div class="end">
      {{ $chatlog->links() }}
    </div>
  </div>
</div>