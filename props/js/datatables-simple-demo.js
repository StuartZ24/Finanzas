window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }

    const datatablesBalance1 = document.getElementById('datatablesBalance1');
    if (datatablesBalance1) {
        new simpleDatatables.DataTable(datatablesBalance1);
    }

    const datatablesBalance2 = document.getElementById('datatablesBalance2');
    if (datatablesBalance2) {
        new simpleDatatables.DataTable(datatablesBalance2);
    }
});
