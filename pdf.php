<!DOCTYPE html>
 <html>
     <head>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
         <script>
             function generatePDF() {
                 var pdf = new jsPDF({
                     orientation: 'p',
                     unit: 'mm',
                     format: 'a5',
                     putOnlyUsedFonts:true
                     });
                 pdf.text("Generate a PDF with JavaScript", 20, 20);
                 pdf.text("published on APITemplate.io", 20, 30);
                 pdf.addPage();
                 pdf.text(20, 20, 'The second page');
                 pdf.save('jsPDF_2Pages.pdf');
             }
         </script>
     </head>
     <body>
         <button onclick="generatePDF()">Generate PDF using jsPDF</button>
     </body>
 </html>