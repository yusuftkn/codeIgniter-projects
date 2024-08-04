<?php $this->load->view('layouts/admin/head')   ?>
<div id="wrapper">
	<!-- Sidebar -->
	<?php $this->load->view('layouts/admin/sidebar')   ?>
	<!-- Sidebar -->
	<div id="content-wrapper" class="d-flex flex-column">
		<div id="content">
			<!-- TopBar -->
			<?php $this->load->view('layouts/admin/header')  ?>
			<!-- Topbar -->
			<!-- Container Fluid-->
			<div class="container-fluid" id="container-wrapper">
				<div class="d-sm-flex align-items-center justify-content-between mb-4">
					<h1 class="h3 mb-0 text-gray-800">Ürün Listesi</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="./">Home</a></li>
						<li class="breadcrumb-item">Tables</li>
						<li class="breadcrumb-item active" aria-current="page">Ürün Tablosu</li>
					</ol>
				</div>

				<div class="row mb-4">
					<div class="col-lg-12 text-left">
						<a href="<?php echo site_url('products/create'); ?>" class="add-product-btn">
							<i class="fas fa-plus"></i> Ürün Ekle
						</a>
					</div>
				</div>

				<div class="row justify-content-lg-center">
					<?php if ($this->session->flashdata('success')): ?>
						<div id="flash-message"  class="text-dark alert alert-success">
							<?php echo $this->session->flashdata('success'); ?>
						</div>
					<?php endif; ?>

					<?php if ($this->session->flashdata('error')): ?>
						<div id="flash-message" class="text-dark alert alert-danger">
							<?php echo $this->session->flashdata('error'); ?>
						</div>
					<?php endif; ?>


					<div class="col-lg-12 mb-4">
						<!-- Simple Tables -->
						<div class="card">
							<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
								<h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
							</div>
							<div class="table-responsive">
								<table class="table align-items-center">
									<thead class="thead-light">
									<tr>
										<th>ID</th>
										<th>Ürün Başlığı</th>
										<th>Ürün Ek Bilgi Başlığı</th>
										<th>Ürün Ek Bilgi Açıklaması</th>
										<th>Meta Title</th>
										<th>Meta Keywords</th>
										<th>Meta Description</th>
										<th>Seo Adres</th>
										<th>Ürün Açıklama</th>
										<th>Video Embed Kodu</th>
										<th>Ürün kodu</th>
										<th>Miktar</th>
										<th>Sepet Ekstra İndirim</th>
										<th>Vergi Oranı</th>
										<th>Satış Fiyatı TL</th>
										<th>Satış Fiyatı USD</th>
										<th>Satış Fiyatı EURO</th>
										<th>2. Satış Fiyatı</th>
										<th>Stoktan Düş</th>
										<th>Durum</th>
										<th>Özellik Bölümü</th>
										<th>Yeni Ürün Geçerlilik Süresi</th>
										<th>Sıralama</th>
										<th>Anasayfada Göster</th>
										<th>Yeni Ürün</th>
										<th>Taksit</th>
										<th>Geçerlilik Süresi</th>
										<th>İşlemler</th>
										<th>Resimler</th>
									</tr>
									</thead>
									<tbody>
									<?php foreach ($products as $product): ?>
									<tr>
										<td><?php echo $product->id   ?></td>
										<td><?php echo $product->information_title ?></td>
										<td><?php echo $product->additional_information_title ?></td>
										<td><?php echo $product->explanation ?></td>
										<td><?php echo $product->title ?></td>
										<td><?php echo $product->keywords ?></td>
										<td><?php echo $product->description ?></td>
										<td><?php echo $product->address ?></td>
										<td><?php echo $product->product_description ?></td>
										<td><?php echo $product->video_kody ?></td>
										<td><?php echo $product->product_code ?></td>
										<td><?php echo $product->amount ?></td>
										<td><?php echo $product->extra_discount ?></td>
										<td><?php echo $product->tax_rate ?></td>
										<td><?php echo $product->price_tl ?></td>
										<td><?php echo $product->price_usd ?></td>
										<td><?php echo $product->price_eur ?></td>
										<td><?php echo $product->second_price_tl ?></td>
										<td><?php echo $product->falloutofstock ?></td>
										<td><?php echo $product->situation ?></td>
										<td><?php echo $product->feature_status ?></td>
										<td><?php echo $product->new_validity_period ?></td>
										<td><?php echo $product->arrangement ?></td>
										<td><?php echo $product->show_on_homepage ?></td>
										<td><?php echo $product->new_product ?></td>
										<td><?php echo $product->installment ?></td>
										<td><?php echo $product->validity_period ?></td>
										<td>
											<div class="d-flex">
												<a href="<?php echo site_url('products/edit/'.$product->id); ?>" class="btn btn-warning btn-sm mr-1">Düzenle</a>
												<a href="<?php echo site_url('products/delete/'.$product->id); ?>" class="btn btn-danger btn-sm">Sil</a>
											</div>
										</td>

										<td>
											<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#productImagesModal<?php echo $product->id; ?>">
												Görüntüle
											</button>
											<!-- Modal -->
											<div class="modal fade" id="productImagesModal<?php echo $product->id; ?>" tabindex="-1" role="dialog" aria-labelledby="productImagesModalLabel<?php echo $product->id; ?>" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="productImagesModalLabel<?php echo $product->id; ?>">Ürün Resimleri</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<?php
															if (!empty($product->images)):
																$images = explode(',', $product->images);
																if (!empty($images) && is_array($images)):
																	foreach ($images as $image):
																		echo '<img src="' . base_url('uploads/images/products/' . $image) . '" class="img-fluid mb-2" style="width: 50px; height: 50px;" />';
																	endforeach;
																else:
																	echo "<p>Resim bulunamadı.</p>";
																endif;
															else:
																echo "<p>Resim bulunamadı.</p>";
															endif;
															?>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
				</div>
				<!--Row-->

			</div>
			<!---Container Fluid-->
		</div>
		<!-- Footer -->
		<?php $this->load->view('layouts/admin/footer')  ?>
		<!-- Footer -->
	</div>
</div>
<?php $this->load->view('layouts/admin/js')  ?>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		setTimeout(function() {
			var flashMessage = document.getElementById('flash-message');
			if (flashMessage) {
				flashMessage.style.transition = 'opacity 1s';
				flashMessage.style.opacity = '0';
				setTimeout(function() {
					flashMessage.remove();
				}, 1000);
			}
		}, 5000);
	});

</script>
