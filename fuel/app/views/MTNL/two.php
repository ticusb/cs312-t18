
<main>
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
                
            </script>
    </section>
</main>
