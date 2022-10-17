function mod_minical_ajax(offset, year, month)
{
    var url = '?option=com_ajax&module=minicalendar&format=raw&offset='+offset+'&year='+year+'&month='+month;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) 
            {
            var elements = document.getElementsByClassName('mod_minical_outer');
            for (var i = 0; i < elements.length; i++)
                elements[i].innerHTML = xhttp.responseText;
            }
        };
    xhttp.open('GET', url, true);
    xhttp.send();
}
