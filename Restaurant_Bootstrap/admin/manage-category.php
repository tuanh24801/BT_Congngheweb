<?php include('partials/menu.php'); ?>
 
    <!-- Main Contemt Section Starts -->
    <div class="main-content">
        <div class="container">
            <div class="row col p-3">
                <h2>Manage category</h2>
            </div>
            <div class="content">
                <div class="row col-md-2 p-4 pt-5">
                     <button type="button" class="btn btn-primary">Add Category</button>
                </div>
                <div class="row col p-4 pb-5">
                    <table class="table align-middle">
                        <thead class="border-0">
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Featured</th>
                                <th scope="col">Active</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="S.N">1.</th>
                                <td class="Title">Pizza</td>
                                <td class="Image">
                                    <img src="../Image/pizza.jpg" alt="" class="img_manage_category">
                                </td>
                                <td class="Featured">Yes</td>
                                <td class="Active">Yes</td>
                                <td class="Actions">
                                    <button type="button" class="btn btn-success">Update Category</button>
                                    <button type="button" class="btn btn-danger">Delete Category</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="S.N">2.</th>
                                <td class="Title">Burger</td>
                                <td class="Image">
                                    <img src="../Image/burger.jpg" alt="" class="img_manage_category">
                                </td>
                                <td class="Featured">Yes</td>
                                <td class="Active">Yes</td>
                                <td class="Actions">
                                    <button type="button" class="btn btn-success">Update Category</button>
                                    <button type="button" class="btn btn-danger">Delete Category</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="S.N">3.</th>
                                <td class="Title">Momo</td>
                                <td class="Image">
                                    <img src="../Image/momo.jpg" alt="" class="img_manage_category">
                                </td>
                                <td class="Featured">Yes</td>
                                <td class="Active">Yes</td>
                                <td class="Actions">
                                    <button type="button" class="btn btn-success">Update Category</button>
                                    <button type="button" class="btn btn-danger">Delete Category</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="S.N">4.</th>
                                <td class="Title">Quia est ipsum id id</td>
                                <td class="Image">
                                    <img src="../Image/bg.jpg" alt="" class="img_manage_category">
                                </td>
                                <td class="Featured">No</td>
                                <td class="Active">Yes</td>
                                <td class="Actions">
                                    <button type="button" class="btn btn-success">Update Category</button>
                                    <button type="button" class="btn btn-danger">Delete Category</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Contemt Section Ends -->

<?php include('partials/footer.php'); ?>