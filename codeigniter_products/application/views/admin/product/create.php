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
					<h1 class="h3 mb-0 text-gray-800">Ürün <?php echo isset($product) ? 'Güncelle': 'Kaydet' ?></h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item" ><a href="./" style="color: gray">Anasayfa</a></li>
						<li class="breadcrumb-item" style="color: gray"><a href=" <?php echo site_url('products') ?>" style="color: gray">Ürün Listesi</a></li>
						<li class="breadcrumb-item active" style="color: blue">Ürün Ekle</li>
					</ol>
				</div>

				<div class="h3 mb-0 text-gray-800  justify-content-between ">
					<h5>Ürün Formu</h5>
					<?php
					if (!empty($successMessage)) {
						echo '<p style="color: green;">' . htmlspecialchars($successMessage) . '</p>';
					}

					if (!empty($errors)) {
						foreach ($errors as $error) {
							echo '<p style="color: red;">' . htmlspecialchars($error) . '</p>';
						}
					}
					?>
				</div>

				<div class="row">

					<div class="col-lg-12 mb-4">
						<!-- Simple Tables -->
						<form action="<?php echo isset($product) ? site_url('products/update/'.$product->id) : site_url('products/store'); ?>" method="post" enctype="multipart/form-data">
						<div class="card">
							<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary"></h6>
								</div>
								<div class="card-body">
									<nav>
										<div class="nav nav-tabs" id="nav-tab" role="tablist">
											<button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Genel</button>
											<button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Detaylar</button>
											<button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Resimler</button>
											<button class="nav-link" id="nav-contact2-tab" data-toggle="tab" data-target="#nav-contact2" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">İndirim</button>
										</div>
									</nav>
									<div class="tab-content" id="nav-tabContent">

										<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

											<div class="form-row mt-3">
												<div class="form-group col-md-4">
													<label for="information_title">Ürün Başlık</label>
												</div>
												<div class="form-gorup col-md-4">
													<input type="text" id="information_title" name="information_title" class="form-control " value="<?php echo isset($product) ? $product->information_title : ''?>">
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="additional_information_title">Ürün Ek Bilgi Başlığı</label>
												</div>
												<div class="form-group col-md-4">
													<input type="text" id="additional_information_title" name="additional_information_title" class="form-control" value="<?php echo isset($product) ? $product->additional_information_title : '' ?>">
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="explanation">Ürün Ek Bilgi Açıklaması</label>
												</div>
												<div class="form-group col-md-4">
													<input type="text" id="explanation" name="explanation" class="form-control" value="<?php echo isset($product) ? $product->explanation : '' ?>">
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="title">Meta Title</label>
												</div>
												<div class="form-group col-md-4">
													<input type="text" id="title" name="title" class="form-control" value="<?php echo isset($product) ? $product->title : '' ?>">
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="keywords">Meta Keywords</label>
												</div>
												<div class="form-group col-md-4">
													<input type="text" id="keywords" name="keywords" class="form-control" value="<?php echo isset($product) ? $product->keywords : '' ?>">
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="description">Meta Description</label>
												</div>
												<div class="form-group col-md-4">
													<input type="text" id="description" name="description" class="form-control" value="<?php echo isset($product) ? $product->description : '' ?>">
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="address">Seo Adres</label>
												</div>
												<div class="form-group col-md-4">
													<input type="text" id="address" name="address" class="form-control" value="<?php echo isset($product) ? $product->address : '' ?>">
												</div>
											</div>


											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="product_description">Ürün Açıklama</label>
												</div>
												<div class="form-group col-md-4">
													<input type="text" id="product_description" name="product_description" class="form-control" value="<?php echo isset($product) ? $product->product_description : '' ?>">
												</div>
											</div>


											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="video_kody">Video Embed Kodu</label>
												</div>
												<div class="form-group col-md-4">
													<input type="number" id="video_kody" name="video_kody" class="form-control" value="<?php echo isset($product) ? $product->video_kody : '' ?>">
												</div>
											</div>

										</div>

										<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
											<div class="form-row mt-3">
												<div class="form-group col-md-4">
													<label for="product_code">Ürün kodu</label>
													<?php if (isset($errors['product_code'])):  ?>
														<p class="text-danger"> <?php echo $errors['product_code'] ?></p>
													<?php  endif; ?>
												</div>
												<div class="form-group col-md-4">
													<input type="text" id="product_code" name="product_code" class="form-control" value="<?php echo isset($product) ? $product->product_code : '' ?>">
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="amount">Miktar</label>
													<?php if (isset($errors['product_code'])):  ?>
														<p class="text-danger"> <?php echo $errors['product_code'] ?></p>
													<?php  endif; ?>
												</div>
												<div class="form-group col-md-1">
													<input type="number" id="amount" name="amount" class="form-control" value="<?php echo isset($product) ? $product->amount : '' ?>">
												</div>
												<div class="form-group col-md-3">
													<select name=amount_unit" id="amount_unit" class="form-control">
														<option value="">adet</option>
														<option value="">1</option>
														<option value="">2</option>
														<option value="">3</option>
													</select>
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="extra_discount">Sepet Ekstra İndirim</label>
												</div>
												<div class="form-group col-md-4">
													<input type="number" id="extra_discount" name="extra_discount" class="form-control" value="<?php echo isset($product) ? $product->extra_discount : '' ?>">
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="tax_rate">Vergi Oranı (%):</label>
												</div>
												<div class="form-group col-md-4">
													<input type="number" id="tax_rate" name="tax_rate" class="form-control"  step="0.01" value="<?php echo isset($product) ? $product->tax_rate : '' ?>">
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="sale_price">Satış Fiyatı</label>
												</div>
												<div class="form-group col-md-4">
													<div class="currency-group">
														<label for="price_tl">TL</label>
														<input type="number" id="price_tl" name="price_tl" class="form-control" value="<?php echo isset($product) ? $product->price_tl : '' ?>">

														<label for="price_usd">USD</label>
														<input type="number" id="price_usd" name="price_usd" class="form-control" value="<?php echo isset($product) ? $product->price_usd : '' ?>">

														<label for="price_eur">EUR</label>
														<input type="number" id="price_eur" name="price_eur" class="form-control" value="<?php echo isset($product) ? $product->price_eur : '' ?>">
													</div>
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="second_selling_price">2. Satış Fiyatı</label>
												</div>
												<div class="form-group col-md-4">
													<div class="currency-group">
														<label for="second_price_tl">TL</label>
														<input type="number" id="second_price_tl" name="second_price_tl" class="form-control" value="<?php echo isset($product) ? $product->second_price_tl : '' ?>">
													</div>
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="falloutofstock">Stoktan Düş</label>
												</div>
												<div class="form-group col-md-4">
													<select name="falloutofstock" id="falloutofstock" class="form-control" >
														<option value="evet">evet</option>
														<option value="hayır">hayır</option>
													</select>
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="situation">Durum</label>
												</div>
												<div class="form-group col-md-4">
													<select name="situation" id="situation" class="form-control">
														<option value="açık">Açık</option>
														<option value="kapalı">Kapalı</option>
													</select>
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="feature_status">Özellik Bölümü</label>
												</div>
												<div class="form-group col-md-4">
													<select name="feature_status" id="feature_status" class="form-control">
														<option value="göster">Göster</option>
														<option value="gizle">Gizle</option>
													</select>
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="new_validity_period">Yeni Ürün Geçerlilik Süresi</label>
												</div>
												<div class="form-group col-md-4">
													<input type="date" id="new_validity_period" name="new_validity_period" class="form-control" value="<?php echo isset($product) ? $product->new_validity_period : '' ?>">
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="arrangement">Sıralama</label>
												</div>
												<div class="form-group col-md-4">
													<input type="number" id="arrangement" name="arrangement" class="form-control" value="<?php echo isset($product) ? $product->arrangement : '' ?>">
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="show_on_homepage">Anasayfada Göster</label>
												</div>
												<div class="form-group col-md-4">
													<input type="number" id="show_on_homepage" name="show_on_homepage" class="form-control" value="<?php echo isset($product) ? $product->show_on_homepage : '' ?>">
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="new_product">Yeni Ürün</label>
												</div>
												<div class="form-group col-md-4">
													<select name="new_product" id="new_product" class="form-control">
														<option value="evet">evet</option>
														<option value="hayır">hayır</option>
													</select>
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="installment">Taksit</label>
												</div>
												<div class="form-group  col-md-4">
													<select name="installment" id="installment" class="form-control">
														<option value="evet">evet</option>
														<option value="hayır">hayır</option>
													</select>
												</div>
											</div>

											<div class="form-row">
												<div class="form-group col-md-4">
													<label for="validity_period">Geçerlilik Süresi</label>
												</div>
												<div class="form-group col-md-4">
													<input type="date" id="validity_period" name="validity_period" class="form-control" value="<?php echo isset($product) ? $product->validity_period : '' ?>">
												</div>
											</div>
										</div>


										<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
											<div class="container mt-5" id="image" data-index="0">
												<?php if (!empty($product_images) && is_array($product_images)): ?>
													<?php foreach ($product_images as $index => $image): ?>
														<div class="form-group row image-group">
															<label for="product_image_<?= $index ?>" class="col-sm-3 col-form-label">Ürün Resmi <?= $index + 1 ?></label>
															<div class="col-sm-9">
																<div class="image-preview">
																	<img id="product_image_preview_<?= $index ?>" src="<?= base_url('uploads/images/products/') . $image['file_name'] ?>" style="width: 100px; height: auto;" alt="Ürün Resmi <?= $index + 1 ?>">
																	<input type="file" id="product_image_<?= $index ?>" name="additional_images[]" class="form-control-file" accept="image/*" onchange="loadImagePreview(event, 'product_image_preview_<?= $index ?>')">
																	<button type="button" class="btn btn-danger mt-3" onclick="clearImage(this, 'product_image_preview_<?= $index ?>')">Temizle</button>
																	<input type="hidden" name="existing_images[]" value="<?= $image['file_name'] ?>">
																</div>
															</div>
														</div>
													<?php endforeach; ?>
												<?php else: ?>
													<p>Resim Yükle</p>
												<?php endif; ?>
											</div>
											<div class="d-flex justify-content-end">
												<button type="button" id="add-image" class="btn btn-primary">Resim Ekle</button>
											</div>

										</div>


										<div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab">
													<table class="table align-items-center mt-4">
														<thead class="thead-light">
														<tr>
															<th>Müşteri Grubu</th>
															<th>Öncelik</th>
															<th>İndirim Türü</th>
															<th>Başlangıç Tarihi</th>
															<th>Bitiş Tarihi</th>
															<th>#</th>
														</tr>
														</thead>
														<tbody id="discount-table-body">

														<?php
														if (isset($discounts) && !empty($discounts)){
															foreach ($discounts as $key => $discount) {
																//$discount = json_decode($discount, true);
																?>
																<tr>
																	<td>
																		<div class="form-group">
																			<label for="customer_group">Müşteri Grubu</label>
																			<select class="form-control" id="customer_group" name="product_discounts[<?php echo $key ?>][customer_group]">
																				<option value="group1" <?php echo (isset($discount['customer_group']) && $discount['customer_group'] == 'group1') ? 'selected' : ''; ?>>Grup 1</option>
																				<option value="group2" <?php echo (isset($discount['customer_group']) && $discount['customer_group'] == 'group2') ? 'selected' : ''; ?>>Grup 2</option>
																				<option value="group3" <?php echo (isset($discount['customer_group']) && $discount['customer_group'] == 'group3') ? 'selected' : ''; ?>>Grup 3</option>
																			</select>
																		</div>
																	</td>
																	<td>
																		<div class="form-group">
																			<input type="number" class="form-control" id="priority" name="product_discounts[<?php echo $key ?>][priority]" value="<?php echo isset($discount['priority']) ? $discount['priority'] : '' ?>">
																		</div>
																	</td>
																	<td>
																		<div class="form-group">
																			<select class="form-control" id="discount_type" name="product_discounts[<?php echo $key ?>][discount_type]">
																				<option value="percentage"  <?php echo (isset($discount['discount_type']) && $discount['discount_type'] == 'percentage') ? 'selected' : ''; ?>>Yüzde İndirim</option>
																				<option value="amount" <?php echo (isset($discount['discount_type']) && $discount['discount_type'] == 'amount') ? 'selected' : ''; ?>>İndirim Fiyatı</option>
																			</select>
																		</div>
																		<div class="form-group price-group">
																			<div>
																				<label for="price_tl">TL Fiyatı</label>
																				<input type="number" class="form-control" id="" name="product_discounts[<?php echo $key ?>][price_tl]" value="<?php echo isset($discount['price_tl']) ? $discount['price_tl'] : '' ?>">
																			</div>
																			<div>
																				<label for="price_usd">USD Fiyatı</label>
																				<input type="number" class="form-control" id="price_usd" name="product_discounts[<?php echo $key ?>][price_usd]" value="<?php echo isset($discount['price_usd']) ? $discount['price_usd'] : ''  ?>">
																			</div>
																			<div>
																				<label for="price_eur">EUR Fiyatı</label>
																				<input type="number" class="form-control" id="price_eur" name="product_discounts[<?php echo $key ?>][price_eur]]" value="<?php echo isset($discount['price_eur']) ? $discount['price_eur'] :''  ?>">
																			</div>
																		</div>
																	</td>
																	<td>
																		<div class="form-group">
																			<input type="date" class="form-control" id="start_date" name="product_discounts[<?php echo $key ?>][start_date]" value="<?php echo isset($discount['start_date']) ? $discount['start_date'] :''  ?>">
																		</div>
																	</td>
																	<td>
																		<div class="form-group">
																			<input type="date" class="form-control" id="end_date" name="product_discounts[<?php echo $key ?>][end_date]" value="<?php echo isset($discount['end_date']) ? $discount['end_date'] :''  ?>">
																		</div>
																	</td>

																	<td>
																		<button type="button" class="btn btn-danger remove-discount" onclick="removeDiscountSection(this)">Kaldır</button>
																	</td>

																</tr>
															<?php }}else { ?>
															<tr>
																<td>
																	<div class="form-group">
																		<label for="customer_group">Müşteri Grubu</label>
																		<select class="form-control" id="customer_group" name="product_discounts[0][customer_group]">
																			<option value="group1">Grup 1</option>
																			<option value="group2">Grup 2</option>
																			<option value="group3">Grup 3</option>
																		</select>
																	</div>
																</td>
																<td>
																	<div class="form-group">
																		<input type="number" class="form-control" id="priority" name="product_discounts[0][priority]" value="<?php echo isset($discount['priority']) ? $discount['priority'] : '' ?>">
																	</div>
																</td>
																<td>
																	<div class="form-group">
																		<select class="form-control" id="discount_type" name="product_discounts[0][discount_type]">
																			<option value="percentage">Yüzde İndirim</option>
																			<option value="amount">İndirim Fiyatı</option>
																		</select>
																	</div>
																	<div class="form-group price-group">
																		<div>
																			<label for="price_tl">TL Fiyatı</label>
																			<input type="number" class="form-control" id="" name="product_discounts[0][price_tl]" value="<?php echo isset($discount['price_tl']) ? $discount['price_tl'] : '' ?>">
																		</div>
																		<div>
																			<label for="price_usd">USD Fiyatı</label>
																			<input type="number" class="form-control" id="price_usd" name="product_discounts[0][price_usd]" value="<?php echo isset($discount['price_usd']) ? $discount['price_usd'] : ''  ?>">
																		</div>
																		<div>
																			<label for="price_eur">EUR Fiyatı</label>
																			<input type="number" class="form-control" id="price_eur" name="product_discounts[0][price_eur]]" value="<?php echo isset($discount['price_eur']) ? $discount['price_eur'] :''  ?>">
																		</div>
																	</div>
																</td>
																<td>
																	<div class="form-group">
																		<input type="date" class="form-control" id="start_date" name="product_discounts[0][start_date]" value="<?php echo isset($discount['start_date']) ? $discount['start_date'] :''  ?>">
																	</div>
																</td>
																<td>
																	<div class="form-group">
																		<input type="date" class="form-control" id="end_date" name="product_discounts[0][end_date]" value="<?php echo isset($discount['end_date']) ? $discount['end_date'] :''  ?>">
																	</div>
																</td>

																<td>
																	<button type="button" class="btn btn-danger remove-discount" onclick="removeDiscountSection(this)">Kaldır</button>
																</td>

															</tr>

														<?php } ?>

														</tbody>
													</table>

													<div class="d-flex justify-content-end">
														<button type="button" id="add-discount" class="btn btn-primary">İndirim Ekle</button>
													</div>
												</div>

									</div>

								</div>
							</div>
							<div class="card-footer">

								<button type="submit" class="btn btn-primary"><?php echo isset($product) ? 'Güncelle': 'Kaydet' ?></button>

							</div>
						</form>
					</div>
				<!--Row-->
				</div>

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
		document.getElementById('add-discount').addEventListener('click', function() {

			var originalRow = document.querySelector('#discount-table-body tr');
			var rowCount = document.querySelectorAll('#discount-table-body tr').length;
			var newRow = originalRow.cloneNode(true);

			var elements = newRow.querySelectorAll('input, select');
			elements.forEach(function(element) {
				var name = element.getAttribute('name');
				const regex = /product_discounts\[(\d+)\]\[([^\]]+)\]/;
				const match = name.match(regex);

				if (match) {
					const currentIndex = parseInt(match[1]);
					const newIndex = rowCount;
					const key = match[2]; // Dinamik anahtar

					const newName = `product_discounts[${newIndex}][${key}]`;
					element.setAttribute('name', newName);
					element.value = '';
				}
			});

			document.getElementById('discount-table-body').appendChild(newRow);
		});

		window.removeDiscountSection = function(button) {
			var row = button.closest('tr');
			row.remove();
		}
	});

// Resim işlemleri

	function loadImagePreview(event, previewId) {
		var reader = new FileReader();
		reader.onload = function() {
			var output = document.getElementById(previewId);
			output.src = reader.result;
		};
		reader.readAsDataURL(event.target.files[0]);
	}


	function clearImage(button, previewId) {
		var input = button.previousElementSibling;
		input.value = ''; // Dosya input alanını temizler
		var preview = document.getElementById(previewId);
		preview.src = 'https://via.placeholder.com/150';
	}

	document.getElementById('add-image').addEventListener('click', function() {
		var container = document.getElementById('image');
		//var index = document.getElementById('image').dataset.index;
		var index = container.children.length + 1;
		var div = document.createElement('div');
		div.className = 'form-group row mt-3 additional-image-group';
		div.innerHTML = `
        <label for="" class="col-sm-3 col-form-label">Ürün Resim ${index}</label>
        <div class="col-sm-9">
            <div class="image-group">
                <img id="additional_image_preview_${index}" class="additional-image-preview" src="https://via.placeholder.com/150" style="width: 100px; height: auto;"  alt="Ekstra Resim ${index}">
                <input type="file" name="additional_images[]" class="form-control-file" accept="image/!*" onchange="loadImagePreview(event, 'additional_image_preview_${index}')">
                <button type="button" class="btn btn-danger mt-3" onclick="clearImage(this, 'additional_image_preview_${index}')">Temizle</button>
                <button type="button" class="btn btn-danger mt-3" onclick="removeAdditionalImage(this)">Kaldır</button>
            </div>
        </div>
    `;
		container.appendChild(div);
	});


	function removeAdditionalImage(button) {
		var group = button.closest('.additional-image-group');
		group.remove();
	}

	function loadImagePreview(event, previewId) {
		var output = document.getElementById(previewId);
		output.src = URL.createObjectURL(event.target.files[0]);
		output.onload = function() {
			URL.revokeObjectURL(output.src)
		}
	}
	
</script>

