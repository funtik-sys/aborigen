function printTable() {
    var tab = document.getElementById('tab');
    var win = window.open('', '', 'height=700,width=700');
    win.document.write(tab.outerHTML);
    win.document.close();
    win.print();
}