<div>
    {{-- <h1>Biodata Saya</h1>
    
    <img src="{{ asset('images/ananda.jpeg') }}" width="150">
     
<br>Nama    : Ananda Krisna Eggy Prayoga<br>
Absen   : 04<br>
NIM     : 253107050009<br>
Prodi   : Manajemen Informatika<br> --}}

<html>
   <table align=center border=1 height=50% width=60% >
            <tr>
                <td colspan="3" align="center"><font face="courier"><b>BIODATA</b></font></td>
            </tr>
            <tr>
                <td>Nama    : </td>
                <td>Ananda Krisna Eggy Prayoga</td>
                <td align=center rowspan="7"><img src="{{ asset('images/ananda.jpeg') }}" width="250" height="400"></td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir    : </td>
                <td>Bojonegoro, 30 Januari 2006</td>
            </tr>
            <tr>
                <td>NIM : </td>
                <td>253107050009</td>
            </tr>
            <tr>
                <td>Program Studi   : </td>
                <td>Manajemen Informatika</td>
            </tr>
            <tr>
                <td>Jurusan : </td>
                <td>Sistem Informasi</td>
            </tr>
            <tr>
                <td>Alamat  : </td>
                <td>Desa Sukorejo</td>
            </tr>
            <tr>
                <td>No. Telp    : </td>
                <td>087849065669</td>
            </tr>
        </table>

        
        <br><div style="text-align: center;">
    <form action="/biodataortu" method="GET">
        <button type="submit">Bio Ortu</button>
    </form>
      <form action="/asalsekolah" method="GET">
        <button type="submit">Asal Sekolah</button>
    </form>
  </div>
    </body>
</html>
</div>
