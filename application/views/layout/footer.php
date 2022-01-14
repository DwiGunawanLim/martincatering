		<!---->
		<div class="copy">
			<p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
		</div>
		</div>
		<div class="clearfix"> </div>
		</div>

		<!---->
		<!--scrolling js-->
		<script src="<?= base_url('assets/'); ?>js/jquery.nicescroll.js"></script>
		<script src="<?= base_url('assets/'); ?>js/scripts.js"></script>
		<!--//scrolling js-->
		<script>
			$(document).ready(function() {
				$("#jumlah").on('keydown keyup change blur', function() {
					var harga = $("#harga").val();
					var jumlah = $("#jumlah").val();

					var total = parseInt(harga) * parseInt(jumlah);
					$("#total").val(total);
					if (parseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
						alert('Stok tidak tersedia! Stok tersedia : ' + parseInt($('input[name="stok"]').val()))
						reset()
					}
				});

				function reset() {
					$('input[name="jumlah"]').val('')
					$('input[name="total"]').val('')
				}
			});
		</script>
		<script type="text/javascript">
			var ctx = document.getElementById('myChart').getContext('2d');
			var chart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: [
						<?php
						foreach ($totalb as $data) {
							echo "'" . $data['buku'] . "',";
						}
						?>
					],
					datasets: [{
						label: 'Jumlah Buku Terjual',
						backgroundColor: "#4e73df",
						hoverBackgroundColor: "#2e59d9",
						borderColor: "#4e73df",
						data: [
							<?php
							foreach ($totalb as $data) {
								echo $data['jum'] . ", ";
							}
							?>
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					layout: {
						padding: {
							left: 10,
							right: 25,
							top: 25,
							bottom: 0
						}
					},
					scales: {
						xAxes: [{
							time: {
								unit: 'buku'
							},
							gridLines: {
								display: false,
								drawBorder: false
							},
							ticks: {
								maxTicksLimit: 20
							},
							maxBarThickness: 50,
						}],
						yAxes: [{
							gridLines: {
								color: "rgb(234, 236, 244)",
								zeroLineColor: "rgb(234, 236, 244)",
								drawBorder: false,
								borderDash: [2],
								zeroLineBorderDash: [2]
							}
						}],
					},
					tooltips: {
						titleMarginBottom: 10,
						titleFontColor: '#6e707e',
						titleFontSize: 14,
						backgroundColor: "#c1d7f5",
						bodyFontColor: "#858796",
						borderColor: "#dddfeb",
						borderWidth: 1,
						xPadding: 15,
						yPadding: 15,
						displayColor: false,
						caretPadding: 10,
					},
				}
			});
		</script>