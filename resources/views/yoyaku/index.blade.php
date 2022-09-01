  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="my-6">
      <table class="text-left w-full border-collapse mt-8">
        <tr class="bg-green-600">
          <th class="p-3 text-left text-white">＃</th>
          <th class="p-3 text-left text-white">クラブ</th>
          <th class="p-3 text-left text-white">代表者名</th>
          <th class="p-3 text-left text-white">メール</th>
          <th class="p-3 text-left text-white">予約第一希望日</th>
          <th class="p-3 text-left text-white">予約第二希望日</th>
          <th class="p-3 text-left text-white">備考</th>
        </tr>
        @foreach($yoyakus as $yoyaku)
        <tr class="bg-white">
          <td class="border-gray-light border hover:bg-gray-100 p-3">{{$yoyaku->id}}</td>
          <td class="border-gray-light border hover:bg-gray-100 p-3">{{$yoyaku->user->club}}</td>
          <td class="border-gray-light border hover:bg-gray-100 p-3">{{$yoyaku->user->name}}</td>
          <td class="border-gray-light border hover:bg-gray-100 p-3">{{$yoyaku->user->email}}</td>
          <td class="border-gray-light border hover:bg-gray-100 p-3">{{$yoyaku->date1}}</td>
          <td class="border-gray-light border hover:bg-gray-100 p-3">{{$yoyaku->date2}}</td>
          <td class="border-gray-light border hover:bg-gray-100 p-3">{{$yoyaku->body}}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>