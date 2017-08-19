<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Note</th>
    </tr>
    </thead>
    <tbody>
    @if(isset($stores))
        @foreach($stores as $store)
        <tr>
            <td>{{$store->id}}</td>
            <td>{{$store->name}}</td>
            <td>{{$store->phone}}</td>
            <td>{{$store->address}}</td>
            <td>{{$store->note}}</td>
        </tr>
        @endforeach
    @endif
    </tbody>
</table>