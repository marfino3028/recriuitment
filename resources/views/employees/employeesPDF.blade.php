
 <h1 align="center">Data Employees </h1>
 <table align="center" width="100%" cellpadding="2" cellspacing="0" border="1">
                  <thead>
                    <tr>
                    	@php
                    $ar_judul = ['No','Nama','Company','Email'];
                    $no = 1;
                    @endphp
                  	@foreach($ar_judul as $jdl)
                      <th>{{ $jdl }}</th>
                    @endforeach
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($ar_employees as $employees)
                  	<tr>
                  		<td>{{ $no++ }}</td>
                  		<td>{{ $employees->nama }}</td>
                      <td>{{ $employees->company }}</td>
                      <td>{{ $employees->email }}</td>
                  	</tr>
                  	@endforeach
                  </tbody>
                </table>
