
 <h1 align="center">Data Companies </h1>
 <table align="center" width="100%" cellpadding="2" cellspacing="0" border="1">
                  <thead>
                    <tr>
                    	@php
                    $ar_judul = ['No','Nama','Email','Logo','Website'];
                    $no = 1;
                    @endphp
                  	@foreach($ar_judul as $jdl)
                      <th>{{ $jdl }}</th>
                    @endforeach
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($ar_companies as $companies)
                  	<tr>
                  		<td>{{ $no++ }}</td>
                  		<td>{{ $companies->nama }}</td>
                      <td>{{ $companies->email }}</td>
                      <td>
                        <center>
                        @if(!empty($companies->logo))
                            <img src="company/{{ $companies->logo }}"  />
                        @else
                            <img src="img/no-photo.jpg" />
                        @endif
                        </center>
                      </td>
                      <td>{{ $companies->website }}</td>

                  	</tr>
                  	@endforeach
                  </tbody>
                </table>
