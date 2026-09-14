
<div>

<html>
    <table align="center" border="1" height="50%" width="60%">
        <tr>
            <td colspan="3" align="center">
                <font face="courier">
                    <b>BIODATA</b>
                </font>
            </td>
        </tr>

        <tr>
            <td>Nama : </td>
            <td>{{ $nama }}</td>
            <td align="center" rowspan="7">
                <img src="{{ asset($foto) }}" width="250" height="400">
            </td>
        </tr>

        <tr>
            <td>Tempat Tanggal Lahir : </td>
            <td>{{ $tgl_lahir }}</td>
        </tr>

        <tr>
            <td>NIM : </td>
            <td>{{ $NIM }}</td>
        </tr>

        <tr>
            <td>Program Studi : </td>
            <td>{{ $study }}</td>
        </tr>

        <tr>
            <td>Jurusan : </td>
            <td>{{ $jurusan }}</td>
        </tr>

        <tr>
            <td>Alamat : </td>
            <td>{{ $alamat }}</td>
        </tr>

        <tr>
            <td>No. Telp : </td>
            <td>{{ $no_telp }}</td>
        </tr>
    </table>

    <br>

    <div style="text-align: center;">
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
