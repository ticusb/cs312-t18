
<main id = "all">
    <section class="cc">
        <h1>Color Coordinate Generation</h1>
            <script type="text/javascript">
                const body = document.getElementsByClassName("cc")
,
                tbl = document.createElement('table');
                tbl.style.width = '100px';
                tbl.style.border = '1px solid black';

                let rc = <?php echo $rows_cols ?>;
                let color = <?php echo $color ?>;

                for (let i = 0; i < rc; i++) {
                    const tr = tbl.insertRow();
                    for (let j = 0; j < rc; j++) {
                    
                        const td = tr.insertCell();
                        td.appendChild(document.createTextNode(`Cell I${i}/J${j}`));
                        td.style.border = '1px solid black';
                        
                 
                    }
                }
                body.appendChild(tbl);
                
                tbl2 = document.createElement('table');
                tbl2.style.border = '1px solid black';
                for (var i = 0; i < rc; i++) {
                    const tr = tbl2.insertRow();
                    for (var j = 0; j < rc; j++) {
                        if (i == 0 && j == 0) {
                            const td = tr.appendChild(document.createTextNode(""));
                        } else if (i == 0) {
                            const td = tr.appendChild(document.createTextNode(String.fromCharCode('A'.charCodeAt() + (i - 1))));
                        } else if (j == 0) {
                            const td = tr.appendChild(document.createTextNode("" + i));
                        } else {
                            const td = tr.appendChild(document.createTextNode(""));
                        }
                        
                    }
                }

                body.appendChild(tbl2);
                
                function set_style(id, attr, value) {
                    var item = document.getElementById(id);
                    item.style[attr] = value;
                }
                function get_style (id, attr) {
                    return document.getElementById(id).style[attr];
                }

                function generate_view() {
                    document.getElementById("all").style.filter = "grayscale(100%)";
                }
            </script>

            <button class="button_one" onclick="generate_view();">
                Print
            </button>
    </section>
</main>
