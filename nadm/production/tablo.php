<?php include 'header.php'; ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Yönetim Paneli</h3>
              </div>

              <div class="title_right">  </div>
                <div class="col-md-5 col-sm-5   form-group pull-right top_search"> </div>
                  <div class="input-group"> </div>
                  
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Ayarlar</a>
                            <a class="dropdown-item" href="#">Ayarlar</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">id </th>
                            <th class="column-title"> Tarih</th>
                            <th class="column-title">Adı</th>
                            <th class="column-title">Soyadı</th>
                            <th class="column-title">Plaka </th>
                            <th class="column-title">Ziyaret Edilen departman</th>
                            <th class="column-title">Ziyaret Edilen Personel</th>
                            <th class="column-title">Kat No</th>
                            <th class="column-title">Kat No</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;"> Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000040</td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$7.45</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000039</td>
                            <td class=" ">May 23, 2014 11:30:12 PM</td>
                            <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
                            </td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$741.20</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000038</td>
                            <td class=" ">May 24, 2014 10:55:33 PM</td>
                            <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
                            </td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$432.26</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000037</td>
                            <td class=" ">May 24, 2014 10:52:44 PM</td>
                            <td class=" ">121000204</td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$333.21</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000040</td>
                            <td class=" ">May 24, 2014 11:47:56 PM </td>
                            <td class=" ">121000210</td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$7.45</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000039</td>
                            <td class=" ">May 26, 2014 11:30:12 PM</td>
                            <td class=" ">121000208 <i class="error fa fa-long-arrow-down"></i>
                            </td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$741.20</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000038</td>
                            <td class=" ">May 26, 2014 10:55:33 PM</td>
                            <td class=" ">121000203</td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$432.26</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000037</td>
                            <td class=" ">May 26, 2014 10:52:44 PM</td>
                            <td class=" ">121000204</td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$333.21</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>

                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000040</td>
                            <td class=" ">May 27, 2014 11:47:56 PM </td>
                            <td class=" ">121000210</td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$7.45</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000039</td>
                            <td class=" ">May 28, 2014 11:30:12 PM</td>
                            <td class=" ">121000208</td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$741.20</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

       <?php include 'footer.php'; ?>
      