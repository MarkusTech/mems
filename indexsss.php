<div class="page-inner">
                    <?php if(isset($_SESSION['message'])): ?>
                        <div class="alert alert-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert">
                            <?php echo $_SESSION['message']; ?>
                        </div>
                    <?php unset($_SESSION['message']); ?>
                    <?php endif ?>
                    <?php if($state == 'voters' && isset($_SESSION['role']) && isset($_SESSION['role']) =='administrator'):?>
                    
                    <?php endif ?>
                        <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">BARANGAY DATA LIST</div>
                                        <?php if(isset($_SESSION['username'])): ?>
                                        <div class="card-tools">
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username'])): ?>
                                        <div class="card-tools">
                                            <a href="#add" data-toggle="modal" class="btn btn-info btn-border btn-round btn-sm">
                                                <i class="fa fa-plus"></i>
                                                Incident
                                            </a>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='administrator'): ?>
                                            <a href="exportcsv/export_resident_csv_all.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Apopong'): ?>
                                            <a href="exportcsv/export_resident_csv_apopong.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Baluan'): ?>
                                            <a href="exportcsv/export_resident_csv_baluan.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Batomelong'): ?>
                                            <a href="exportcsv/export_resident_csv_batomelong.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Buayan'): ?>
                                            <a href="exportcsv/export_resident_csv_buayan.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Bula'): ?>
                                            <a href="exportcsv/export_resident_csv_bula.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Calumpang'): ?>
                                            <a href="exportcsv/export_resident_csv_calumpang.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='City Heights'): ?>
                                            <a href="exportcsv/export_resident_csv_cityheights.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Conel'): ?>
                                            <a href="exportcsv/export_resident_csv_conel.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas East'): ?>
                                            <a href="exportcsv/export_resident_csv_dadeast.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas North'): ?>
                                            <a href="exportcsv/export_resident_csv_dadnorth.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas South'): ?>
                                            <a href="exportcsv/export_resident_csv_dadsouth.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas West'): ?>
                                            <a href="exportcsv/export_resident_csv_west.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Fatima'): ?>
                                            <a href="exportcsv/export_resident_csv_fatima.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Katangawan'): ?>
                                            <a href="exportcsv/export_resident_csv_katangawan.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Labangal'): ?>
                                            <a href="exportcsv/export_resident_csv_labangal.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Lagao'): ?>
                                            <a href="exportcsv/export_resident_csv_lagao.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Ligaya'): ?>
                                            <a href="exportcsv/export_resident_csv_ligaya.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Mabuhay'): ?>
                                            <a href="exportcsv/export_resident_csv_mabuhay.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Olympog'): ?>
                                            <a href="exportcsv/export_resident_csv_olympog.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='San Isidro'): ?>
                                            <a href="exportcsv/export_resident_csv_sanisidro.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='San Jose'): ?>
                                            <a href="exportcsv/export_resident_csv_sanjose.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Siguel'): ?>
                                            <a href="exportcsv/export_resident_csv_siguel.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Sinawal'): ?>
                                            <a href="exportcsv/export_resident_csv_sinawal.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Tambler'): ?>
                                            <a href="exportcsv/export_resident_csv_tambler.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Tinagacan'): ?>
                                            <a href="exportcsv/export_resident_csv_tinagacan.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Upper Labay'): ?>
                                            <a href="exportcsv/export_resident_csv_upperlabay.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                            <!--
                                            <a href="#add" data-toggle="modal" class="btn btn-info btn-border btn-round btn-sm">
                                                <i class="fa fa-plus"></i>
                                                Incident
                                            </a>
                                        -->
                                </div>
                            </div>
							<div class="card">
								
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th scope="col">First Name</th>
													<th scope="col">Middle Name</th>
													<th scope="col">Last Name</th>
													<th scope="col">Relationship</th>
                                                    <th scope="col">Age</th>
                                                    <th scope="col">C. Status</th>
													<th scope="col">Gender</th>
													<th scope="col">Occupation</th>
													<th scope="col">Income</th>
                                                    <th scope="col">Dependents</th>
													<th scope="col">Child</th>
													<th scope="col">Senior</th>
													<th scope="col">H. Condition</th>
                                                    <th scope="col">Contact</th>
													<th scope="col">Amount Damage</th>
													<th scope="col">H. Status</th>
													<th scope="col">Barangay</th>
                                                    <?php if($_SESSION['role']=='administrator'):?>
														<th>Action</th>
													<?php endif?>
												</tr>
											</thead>

                                            <?php if($_SESSION['role']=='administrator'):?>
											<tbody>
												<?php if(!empty($incidentlist)): ?>
													<?php foreach($incidentlist as $row): ?>
														<tr>
															<td><?= $row['firstname'] ?></td>
															<td><?= $row['middlename'] ?></td>
                                                            <td><?= $row['lastname'] ?></td>
															<td><?= $row['relationship'] ?></td>
															<td><?= $row['age'] ?></td>
                                                            <td><?= $row['civilstatus'] ?></td>
															<td><?= $row['gender'] ?></td>
															<td><?= $row['occupation'] ?></td>
															<td><?= $row['income'] ?></td>
                                                            <td><?= $row['dependents'] ?></td>
															<td><?= $row['child'] ?></td>
															<td><?= $row['senior'] ?></td>
															<td><?= $row['housecondition'] ?></td>
                                                            <td><?= $row['contact'] ?></td>
															<td><?= $row['amountdamage'] ?></td>
															<td><?= $row['housingstatus'] ?></td>
															<td><?= $row['barangay'] ?></td>
															<?php if(isset($_SESSION['username'])):?>
																<td>
																	<?php if($_SESSION['role']=='administrator'):?>
																	<a type="button" data-toggle="tooltip" href="model/remove_incident.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this incident?');" class="btn btn-link btn-danger" data-original-title="Remove">
																		<i class="fa fa-times"></i>
																	<?php endif ?>
																</td>
															<?php endif?>
                                                            </a>
														</tr>
													<?php endforeach ?>
												<?php else: ?>
													<tr>
														<td colspan="12" class="text-center">No Available Data</td>
													</tr>
												<?php endif ?>
											</tbody>
                                            <?php endif ?>
                                            
                                            
										</table>
									</div>
								</div>
							</div>
				</div>
			</div>