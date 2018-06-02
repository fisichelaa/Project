
    function data(){
    var tugas   = parseFloat(document.page.tugas.value);
    var uts     = parseFloat(document.page.uts.value);
    var uas     = parseFloat(document.page.uas.value);
    var ip      = "";
    var ket     = "";

    var na = (0.30*tugas)+(0.30*uts)+(0.40*uas);

        if ((na >= 85) && (na <=100))
        {
            ip="A";
            ket="Sangat Baik";
        }
            else if ((na >= 70) && (na<=84.99))
            {
                ip="B";
                ket="Baik";
            }
            else if ((na >= 55) && (na<=69.99))
            {
                ip="C";
                ket="Cukup";
            }
            else if (na<=54)
            {
                ip="D";
                ket="Kurang";
            }
            document.page.ip.value=ip;
            document.page.ket.value=ket;
        }
