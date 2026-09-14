```html
<div>

<html>
    <table align="center" border="1" height="20%" width="30%">
        <tr>
            <td colspan="3" align="center">
                <font face="courier">
                    <b>BIODATA</b>
                </font>
            </td>
        </tr>

        <tr>
            <td>Nama: </td>
            <td>{{ $nama1 }}</td>
            <td align="center" rowspan="7">
                <img src="{{ asset($fotoa) }}" width="150" height="200">
            </td>
        </tr>

        <tr>
            <td>Tempat Tanggal Lahir: </td>
            <td>{{ $tgl_lahir1 }}</td>
        </tr>

        <tr>
            <td>Usia: </td>
            <td>{{ $usia1 }}</td>
        </tr>

        <tr>
            <td>Alamat: </td>
            <td>{{ $alamat }}</td>
        </tr>

        <tr>
            <td>No. Telp: </td>
            <td>{{ $no_telp }}</td>
        </tr>
    </table>


    <br>


    <table align="center" border="1" height="20%" width="30%">
        <tr>
            <td colspan="3" align="center">
                <font face="courier">
                    <b>BIODATA</b>
                </font>
            </td>
        </tr>

        <tr>
            <td>Nama: </td>
            <td>{{ $nama2 }}</td>
            <td align="center" rowspan="7">
                <img src="{{ asset($fotob) }}" width="150" height="200">
            </td>
        </tr>

        <tr>
            <td>Tempat Tanggal Lahir: </td>
            <td>{{ $tgl_lahir2 }}</td>
        </tr>

        <tr>
            <td>Usia: </td>
            <td>{{ $usia2 }}</td>
        </tr>

        <tr>
            <td>Alamat: </td>
            <td>{{ $alamat }}</td>
        </tr>

        <tr>
            <td>No. Telp: </td>
            <td>{{ $no_telp }}</td>
        </tr>
    </table>


    <br>

    <div style="text-align: center;">
        <form action="/biodata1" method="GET">
            <button type="submit">Kembali</button>
        </form>
    </div>

</html>

</div>
```
