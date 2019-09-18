<!--Footer-->	
</div>
</div>
</body>
<script src="<?=base_url()?>vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>vendor/semantic-ui/semantic.min.js"></script>
<script src="<?=base_url()?>vendor/chart.js/Chart.min.js"></script>
<script src="<?=base_url()?>vendor/chart.js/utils.js"></script>
<script src="<?=base_url()?>vendor/dataTables/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>vendor/dataTables/js/dataTables.semanticui.min.js"></script>
<script src="<?=base_url()?>vendor/custom/themes.min.js"></script>
<script>
	var lineChartData = {
		labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
		datasets: [{
			label: 'My First dataset',
			borderColor: window.chartColors.red,
			backgroundColor: window.chartColors.red,
			fill: false,
			data: [
			randomScalingFactor(),
			randomScalingFactor(),
			randomScalingFactor(),
			randomScalingFactor(),
			randomScalingFactor(),
			randomScalingFactor(),
			randomScalingFactor()
			],
			yAxisID: 'y-axis-1',
		}, {
			label: 'My Second dataset',
			borderColor: window.chartColors.blue,
			backgroundColor: window.chartColors.blue,
			fill: false,
			data: [
			randomScalingFactor(),
			randomScalingFactor(),
			randomScalingFactor(),
			randomScalingFactor(),
			randomScalingFactor(),
			randomScalingFactor(),
			randomScalingFactor()
			],
			yAxisID: 'y-axis-2'
		}]
	};

	window.onload = function() {
		var ctx = document.getElementById('Examplec1').getContext('2d');
		window.myLine = Chart.Line(ctx, {
			data: lineChartData,
			options: {
				responsive: true,
				hoverMode: 'index',
				stacked: false,
				title: {
					display: true,
					text: 'Chart.js Line Chart - Multi Axis'
				},
				scales: {
					yAxes: [{
							type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
							display: true,
							position: 'left',
							id: 'y-axis-1',
						}, {
							type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
							display: true,
							position: 'right',
							id: 'y-axis-2',

							// grid line settings
							gridLines: {
								drawOnChartArea: false, // only want the grid lines for one axis to show up
							},
						}],
					}
				}
			});
	};

	$(document).ready(function() {
		$('#tablenya').DataTable({
			"iDisplayLength": 10
		});
	} );
	
	$('.small.modal')
	.modal('attach events', '.add.button', 'show')
	;

	$('.large.modal')
	.modal('attach events', '.add.button', 'show')
	;

	$('.message .close')
	.on('click', function() {
		$(this)
		.closest('.message')
		.transition('fade')
		;
	})
	;
</script>
</html>