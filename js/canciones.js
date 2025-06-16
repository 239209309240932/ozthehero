        function sortTable(colIndex) {
          const table = document.getElementById("Extension1");
          const rows = Array.from(table.rows).slice(1); // Excluir la cabecera
          const header = table.rows[0].cells[colIndex];
          const isAscending = header.classList.contains("sorted-asc");
        
          // Limpiar las clases en todos los encabezados
          Array.from(table.rows[0].cells).forEach(th => th.classList.remove("sorted-asc", "sorted-desc"));
        
          // Ordenar filas
          rows.sort((a, b) => {
            const textA = a.cells[colIndex].innerText.trim().toLowerCase();
            const textB = b.cells[colIndex].innerText.trim().toLowerCase();
            if (textA < textB) return isAscending ? 1 : -1;
            if (textA > textB) return isAscending ? -1 : 1;
            return 0;
          });
        
          // Reagregar filas ordenadas
          const tbody = table.tBodies[0];
          rows.forEach(row => tbody.appendChild(row));
        
          // Aplicar clase al encabezado actual
          header.classList.add(isAscending ? "sorted-desc" : "sorted-asc");
        }
    