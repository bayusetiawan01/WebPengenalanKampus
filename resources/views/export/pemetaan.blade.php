<table>
    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>Pilihan 1</th>
            <th>Pilihan 1.1</th>
            <th>Pilihan 1.2</th>
            <th>Pilihan 2</th>
            <th>Pilihan 2.1</th>
            <th>Pilihan 2.2</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pemetaan as $p)
        <tr>
            <td>{{$p->npm}}</td>
            <td>{{$p->nama}}</td>
            <td>{{$p->pilihan1}}</td>
            <td>{{$p->pilihan11}}</td>
            <td>{{$p->pilihan12}}</td>
            <td>{{$p->pilihan2}}</td>
            <td>{{$p->pilihan21}}</td>
            <td>{{$p->pilihan22}}</td>
        </tr>
        @endforeach
    </tbody>
</table>