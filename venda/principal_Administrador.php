

     <?php


            
                require("../functions/conexao.php");
                     
                                    
                $sql =  "SELECT * FROM Pessoa WHERE Usuários =
                'Cliente'";
$qr = mysqli_query($con,$sql) or die(mysqli_error());

while($ln = mysqli_fetch_assoc($qr)){



      $titulo  = $ln['Nome'];
        $id  = $ln['CPF_pessoa'];
echo  '     
    <div class="col-lg-3 col-md-4">
  <div class="product">
        <font size="2"><tr>
       <td>'.$id.'</td>
        <td>'.$titulo.'</td>
   
      
</td>
';
echo '
    </div>
  </div>
</div>


';
$_SESSION['titulo']=$titulo;
}
    ?>
           </tr></tbody></a>    </tr></tbody></Table></tfoot>

    </tr>
	<!-- Footer --></tfoot></div></div></section></div></div></center></header></div>
   <BR><BR>
		<br><BR>		</BR></tr></tbody>
</tfoot></form></table>
					<center>
<hr>
							<p>Desenvolvido por Karina Lira Ohara, Leonardo Salles e Tallison</p>
</center>
				<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>