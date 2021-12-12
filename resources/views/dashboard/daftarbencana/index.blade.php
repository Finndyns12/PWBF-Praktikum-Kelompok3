@extends('dashboard\layouts\main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Daftar Bencana</h1>
</div>

<table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Provinsi</th>
              <th scope="col">Banjir</th>
              <th scope="col">Tanah Longsor</th>
              <th scope="col">Kebakaran Hutan</th>
              <th scope="col">Gunung Meletus</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Aceh</td>
              <td>2209</td>
              <td>361</td>
              <td>103</td>
              <td>106</td>
            </tr>
            <tr>
              <td>Sumatera Utara</td>
              <td>942</td>
              <td>738</td>
              <td>238</td>
              <td>122</td>
            </tr>
            <tr>
              <td>Sumatera Barat</td>
              <td>440</td>
              <td>293</td>
              <td>145</td>
              <td>10</td>
            </tr>
            <tr>
              <td>Riau</td>
              <td>584</td>
              <td>34</td>
              <td>468</td>
              <td>0</td>
            </tr>
            <tr>
              <td>Jambi</td>
              <td>575</td>
              <td>98</td>
              <td>171</td>
              <td>0</td>
            </tr>
            <tr>
              <td>Sumatera Selatan</td>
              <td>584</td>
              <td>172</td>
              <td>274</td>
              <td>0</td>
            </tr>
            <tr>
              <td>Bengkulu</td>
              <td>231</td>
              <td>128</td>
              <td>13</td>
              <td>0</td>
            </tr>
            <tr>
              <td>Lampung</td>
              <td>584</td>
              <td>147</td>
              <td>44</td>
              <td>0</td>
            </tr>
            <tr>
              <td>Kep.Bangka Belitung</td>
              <td>186</td>
              <td>5</td>
              <td>30</td>
              <td>0</td>
            </tr>
            <tr>
              <td>Kep.Riau</td>
              <td>76</td>
              <td>24</td>
              <td>40</td>
              <td>0</td>
            </tr>
            <tr>
              <td>DKI Jakarta</td>
              <td>101</td>
              <td>6</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>Jawa Barat</td>
              <td>1185</td>
              <td>1824</td>
              <td>200</td>
              <td>0</td>
            </tr>
            <tr>
              <td>DI Yogyakarta</td>
              <td>215</td>
              <td>117</td>
              <td>3</td>
              <td>4</td>
            </tr>
            <tr>
              <td>Jawa Timur</td>
              <td>1422</td>
              <td>843</td>
              <td>128</td>
              <td>100</td>
            </tr>
            <tr>
              <td>Banten</td>
              <td>501</td>
              <td>219</td>
              <td>13</td>
              <td>0</td>
            </tr>
          </tbody>
        </table>

    @endsection