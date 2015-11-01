<html>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css"
          href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
            src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8"
            src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

    <title> Kadri M</title>
</head>

</html>

<body>
<table id="sorditav" border="2px">
    <thead>
    <tr>
        <th>Eesnimi</th>
        <th>Töö</th>
        <th>Vanus (a)</th>
        <th>Pikkus (cm)</th>
        <th>Kaal (kg)</th>
    </tr>
    </thead>

    <tr>
        <td>Kati</td>
        <td>Ettekandja</td>
        <td>22</td>
        <td>175</td>
        <td>65</td>
    </tr>
    <tr>
        <td>Marta</td>
        <td>Tisler</td>
        <td>32</td>
        <td>167</td>
        <td>72</td>
    </tr>
    <tr>
        <td>Robert</td>
        <td>Õpilane</td>
        <td>15</td>
        <td>194</td>
        <td>74</td>
    </tr>
    <tr>
        <td>Kristo</td>
        <td>Taksojuht</td>
        <td>65</td>
        <td>172</td>
        <td>95</td>
    </tr>
    <tr>
        <td>Tormi</td>
        <td>Juuksur</td>
        <td>45</td>
        <td>155</td>
        <td>46</td>
    </tr>

</table>
<script>
    $(function () {
        $("#sorditav").dataTable();
    });
</script>
</body>
</html>