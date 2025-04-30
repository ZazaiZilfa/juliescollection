<?php 
session_start();
require '../include/function.php';
require 'include/header.php';
?>
  <div class="drawer lg:drawer-open">
    <input id="drawer-toggle" type="checkbox" class="drawer-toggle" />
    
    <div class="drawer-content flex flex-col">
      <!-- Navbar -->
       <div class="navbar bg-base-100 shadow-md md:hidden">
        <div class="flex-none">
          <label for="drawer-toggle" class="btn btn-square btn-ghost">
            <i class="fas fa-bars"></i>
          </label>
        </div>
        <div class="flex-1">
          <a class="btn btn-ghost text-xl">Admin Dashboard</a>
        </div>
        <div class="flex-none">
          <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                <img alt="User avatar" src="https://api.dicebear.com/6.x/initials/svg?seed=Admin" />
              </div>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
              <li><a>Profile</a></li>
              <li><a>Settings</a></li>
              <li><a>Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <!-- Page content -->
      <div class="p-4 lg:p-6">
        <div class="flex justify-between items-center mb-6">
          <div>
            <h1 class="text-2xl font-bold">Products Management</h1>
            <div class="text-sm breadcrumbs">
              <ul>
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="datamaster.html">Data Master</a></li>
                <li>Products</li>
              </ul>
            </div>
          </div>
          <div class="hidden lg:flex items-center gap-2">
            <div class="dropdown dropdown-end">
              <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                  <img alt="User avatar" src="https://api.dicebear.com/6.x/initials/svg?seed=Admin" />
                </div>
              </div>
              <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a>Profile</a></li>
                <li><a>Settings</a></li>
                <li><a>Logout</a></li>
              </ul>
            </div>
            <span class="font-medium">Admin User</span>
          </div>
        </div>
        
        <!-- Products Management -->
        <div class="bg-base-100 rounded-box shadow-md p-4 mb-6">
          <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-6">
            <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto">
              <div class="form-control w-full md:w-auto">
                <div class="input-group">
                  <input type="text" placeholder="Search products..." class="input input-bordered w-full md:w-auto" />
                  <button class="btn btn-square">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
              <select class="select select-bordered w-full md:w-auto">
                <option disabled selected>Filter by category</option>
                <option>All categories</option>
                <option>Electronics</option>
                <option>Clothing</option>
                <option>Home & Kitchen</option>
                <option>Beauty</option>
              </select>
            </div>
            <button class="btn btn-primary w-full md:w-auto" onclick="document.getElementById('add-product-modal').showModal()">
              <i class="fas fa-plus mr-2"></i> Add New Product
            </button>
          </div>
          
          <div class="overflow-x-auto">
            <table class="table table-zebra">
              <thead>
                <tr>
                  <th>
                    <label>
                      <input type="checkbox" class="checkbox" />
                    </label>
                  </th>
                  <th>Image</th>
                  <th>Product Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <label>
                      <input type="checkbox" class="checkbox" />
                    </label>
                  </td>
                  <td>
                    <div class="avatar">
                      <div class="w-12 h-12 rounded">
                        <img src="https://picsum.photos/id/96/100/100" alt="Wireless Headphones" />
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="font-bold">Sprei 1</div>
                    <div class="text-sm opacity-50">PRD-001</div>
                  </td>
                  <td>Katun Lokal</td>
                  <td>Rp.400000</td>
                  <td>45</td>
                  <td><div class="badge badge-success">Active</div></td>
                  <td>
                    <div class="flex gap-2">
                      <button class="btn btn-xs btn-ghost" onclick="document.getElementById('edit-product-modal').showModal()">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button class="btn btn-xs btn-ghost text-error">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      <input type="checkbox" class="checkbox" />
                    </label>
                  </td>
                  <td>
                    <div class="avatar">
                      <div class="w-12 h-12 rounded">
                        <img src="https://picsum.photos/id/119/100/100" alt="Smart Watch" />
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="font-bold">Seprei Cinamorol</div>
                    <div class="text-sm opacity-50"> PRD-002</div>
                  </td>
                  <td>Katun Premium</td>
                  <td>Rp.300000</td>
                  <td>4,3 Meter</td>
                  <td><div class="badge badge-success">Active</div></td>
                  <td>
                    <div class="flex gap-2">
                      <button class="btn btn-xs btn-ghost" onclick="document.getElementById('edit-product-modal').showModal()">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button class="btn btn-xs btn-ghost text-error">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      <input type="checkbox" class="checkbox" />
                    </label>
                  </td>
                  <td>
                    <div class="avatar">
                      <div class="w-12 h-12 rounded">
                        <img src="https://picsum.photos/id/26/100/100" alt="Wireless Earbuds" />
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="font-bold">Sprei 2</div>
                    <div class="text-sm opacity-50"> PRD-003</div>
                  </td>
                  <td>Katun Premium</td>
                  <td>6000000</td>
                  <td>5,7 Meter</td>
                  <td><div class="badge badge-success">Active</div></td>
                  <td>
                    <div class="flex gap-2">
                      <button class="btn btn-xs btn-ghost" onclick="document.getElementById('edit-product-modal').showModal()">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button class="btn btn-xs btn-ghost text-error">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      <input type="checkbox" class="checkbox" />
                    </label>
                  </td>
                  <td>
                    <div class="avatar">
                      <div class="w-12 h-12 rounded">
                        <img src="https://picsum.photos/id/1/100/100" alt="Premium Smartphone" />
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="font-bold">Sprei 5</div>
                    <div class="text-sm opacity-50"> PRD-004</div>
                  </td>
                  <td>Katun Jepang</td>
                  <td>Rp.6000000</td>
                  <td>3.2 Meter</td>
                  <td><div class="badge badge-success">Active</div></td>
                  <td>
                    <div class="flex gap-2">
                      <button class="btn btn-xs btn-ghost" onclick="document.getElementById('edit-product-modal').showModal()">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button class="btn btn-xs btn-ghost text-error">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      <input type="checkbox" class="checkbox" />
                    </label>
                  </td>
                  <td>
                    <div class="avatar">
                      <div class="w-12 h-12 rounded">
                        <img src="https://picsum.photos/id/180/100/100" alt="Laptop Backpack" />
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="font-bold">Laptop Backpack</div>
                    <div class="text-sm opacity-50"> PRD-005</div>
                  </td>
                  <td>Accessories</td>
                  <td>$49.99</td>
                  <td>75</td>
                  <td><div class="badge badge-success">Active</div></td>
                  <td>
                    <div class="flex gap-2">
                      <button class="btn btn-xs btn-ghost" onclick="document.getElementById('edit-product-modal').showModal()">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button class="btn btn-xs btn-ghost text-error">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      <input type="checkbox" class="checkbox" />
                    </label>
                  </td>
                  <td>
                    <div class="avatar">
                      <div class="w-12 h-12 rounded">
                        <img src="https://picsum.photos/id/21/100/100" alt="Bluetooth Speaker" />
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="font-bold">Bluetooth Speaker</div>
                    <div class="text-sm opacity-50"> PRD-006</div>
                  </td>
                  <td>Electronics</td>
                  <td>$59.99</td>
                  <td>28</td>
                  <td><div class="badge badge-warning">Low Stock</div></td>
                  <td>
                    <div class="flex gap-2">
                      <button class="btn btn-xs btn-ghost" onclick="document.getElementById('edit-product-modal').showModal()">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button class="btn btn-xs btn-ghost text-error">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      <input type="checkbox" class="checkbox" />
                    </label>
                  </td>
                  <td>
                    <div class="avatar">
                      <div class="w-12 h-12 rounded">
                        <img src="https://picsum.photos/id/160/100/100" alt="Wireless Charger" />
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="font-bold">Wireless Charger</div>
                    <div class="text-sm opacity-50"> PRD-007</div>
                  </td>
                  <td>Electronics</td>
                  <td>$29.99</td>
                  <td>0</td>
                  <td><div class="badge badge-error">Out of Stock</div></td>
                  <td>
                    <div class="flex gap-2">
                      <button class="btn btn-xs btn-ghost" onclick="document.getElementById('edit-product-modal').showModal()">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button class="btn btn-xs btn-ghost text-error">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>
                      <input type="checkbox" class="checkbox" />
                    </label>
                  </td>
                  <td>
                    <div class="avatar">
                      <div class="w-12 h-12 rounded">
                        <img src="https://picsum.photos/id/335/100/100" alt="Cotton T-Shirt" />
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="font-bold">Cotton T-Shirt</div>
                    <div class="text-sm opacity-50"> PRD-008</div>
                  </td>
                  <td>Clothing</td>
                  <td>$19.99</td>
                  <td>120</td>
                  <td><div class="badge badge-success">Active</div></td>
                  <td>
                    <div class="flex gap-2">
                      <button class="btn btn-xs btn-ghost" onclick="document.getElementById('edit-product-modal').showModal()">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button class="btn btn-xs btn-ghost text-error">
                        <i class="fas fa-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <div class="flex justify-between items-center mt-4">
            <div class="text-sm text-gray-500">Showing 1-8 of 24 products</div>
            <div class="join">
              <button class="join-item btn">«</button>
              <button class="join-item btn btn-active">1</button>
              <button class="join-item btn">2</button>
              <button class="join-item btn">3</button>
              <button class="join-item btn">»</button>
            </div>
          </div>
        </div>
        
        <!-- Bulk Actions -->
        <div class="bg-base-100 rounded-box shadow-md p-4 mb-6">
          <h2 class="text-lg font-bold mb-4">Bulk Actions</h2>
          <div class="flex flex-wrap gap-2">
            <button class="btn btn-sm">
              <i class="fas fa-download mr-2"></i> Export Selected
            </button>
            <button class="btn btn-sm btn-error">
              <i class="fas fa-trash mr-2"></i> Delete Selected
            </button>
            <button class="btn btn-sm">
              <i class="fas fa-tag mr-2"></i> Update Prices
            </button>
            <button class="btn btn-sm">
              <i class="fas fa-boxes mr-2"></i> Update Stock
            </button>
            <button class="btn btn-sm">
              <i class="fas fa-check-circle mr-2"></i> Mark as Active
            </button>
            <button class="btn btn-sm">
              <i class="fas fa-times-circle mr-2"></i> Mark as Inactive
            </button>
          </div>
        </div>
        
        <!-- Product Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
          <div class="stats shadow">
            <div class="stat">
              <div class="stat-figure text-primary">
                <i class="fas fa-box-open text-3xl"></i>
              </div>
              <div class="stat-title">Total Products</div>
              <div class="stat-value">24</div>
              <div class="stat-desc">↗︎ 3 (14%) from last month</div>
            </div>
          </div>
          
          <div class="stats shadow">
            <div class="stat">
              <div class="stat-figure text-success">
                <i class="fas fa-check-circle text-3xl"></i>
              </div>
              <div class="stat-title">Active Products</div>
              <div class="stat-value text-success">21</div>
              <div class="stat-desc">87.5% of total products</div>
            </div>
          </div>
          
          <div class="stats shadow">
            <div class="stat">
              <div class="stat-figure text-error">
                <i class="fas fa-exclamation-circle text-3xl"></i>
              </div>
              <div class="stat-title">Low/Out of Stock</div>
              <div class="stat-value text-error">3</div>
              <div class="stat-desc">Requires attention</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Sidebar -->
    <div class="drawer-side z-40">
      <label for="drawer-toggle" aria-label="close sidebar" class="drawer-overlay"></label>
      <aside class="bg-base-100 w-64 min-h-screen">
        <div class="p-4 text-xl font-bold flex items-center gap-2">
          <i class="fas fa-chart-line text-primary"></i>
          <span>Admin Panel</span>
        </div>
        <ul class="menu p-4 text-base-content">
          <li class="menu-title">Main</li>
          <li><a href="index.html"><i class="fas fa-home mr-2"></i>Dashboard</a></li>
          <li><a href="users.html"><i class="fas fa-users mr-2"></i>Users</a></li>
          
          <li class="menu-title mt-4">Data Master</li>
          <li>
            <details open>
              <summary><i class="fas fa-database mr-2"></i>Data Master</summary>
              <ul>
                <li><a href="categories.html"><i class="fas fa-tags mr-2"></i>Categories</a></li>
                <li><a href="products.html" class="active"><i class="fas fa-box mr-2"></i>Products</a></li>
                <li><a href="attributes.html"><i class="fas fa-sliders-h mr-2"></i>Attributes</a></li>
                <li><a href="brands.html"><i class="fas fa-copyright mr-2"></i>Brands</a></li>
              </ul>
            </details>
          </li>
          
          <li class="menu-title mt-4">E-commerce</li>
          <li><a href="orders.html"><i class="fas fa-shopping-cart mr-2"></i>Orders</a></li>
          <li><a href="customers.html"><i class="fas fa-user-friends mr-2"></i>Customers</a></li>
          <li><a href="coupons.html"><i class="fas fa-ticket-alt mr-2"></i>Coupons</a></li>
          <li><a href="reviews.html"><i class="fas fa-star mr-2"></i>Reviews</a></li>
          
          <li class="menu-title mt-4">Settings</li>
          <li><a href="profile.html"><i class="fas fa-user mr-2"></i>Profile</a></li>
          <li><a href="settings.html"><i class="fas fa-cog mr-2"></i>Settings</a></li>
          
          <li class="mt-4"><a href="#" class="text-error"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a></li>
        </ul>
      </aside>
    </div>
  </div>
  
  <!-- Add Product Modal -->
  <dialog id="add-product-modal" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box max-w-3xl">
      <h3 class="font-bold text-lg mb-4">Add New Product</h3>
      <form>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
          <div class="form-control">
            <label class="label">
              <span class="label-text">Product Name</span>
              <span class="label-text-alt text-error">*Required</span>
            </label>
            <input type="text" placeholder="Enter product name" class="input input-bordered" required />
          </div>
          
          <div class="form-control">
            <label class="label">
              <span class="label-text">SKU</span>
              <span class="label-text-alt text-error">*Required</span>
            </label>
            <input type="text" placeholder="Enter SKU" class="input input-bordered" required />
          </div>
          
          <div class="form-control">
            <label class="label">
              <span class="label-text">Category</span>
              <span class="label-text-alt text-error">*Required</span>
            </label>
            <select class="select select-bordered" required>
              <option disabled selected>Select category</option>
              <option>Electronics</option>
              <option>Clothing</option>
              <option>Home & Kitchen</option>
              <option>Beauty</option>
              <option>Accessories</option>
            </select>
          </div>
          
          <div class="form-control">
            <label class="label">
              <span class="label-text">Brand</span>
            </label>
            <select class="select select-bordered">
              <option disabled selected>Select brand</option>
              <option>Apple</option>
              <option>Samsung</option>
              <option>Sony</option>
              <option>LG</option>
              <option>Nike</option>
              <option>Adidas</option>
            </select>
          </div>
          
          <div class="form-control">
            <label class="label">
              <span class="label-text">Regular Price</span>
              <span class="label-text-alt text-error">*Required</span>
            </label>
            <div class="join w-full">
              <span class="join-item btn btn-sm">$</span>
              <input type="number" step="0.01" placeholder="0.00" class="input input-bordered join-item w-full" required />
            </div>
          </div>
          
          <div class="form-control">
            <label class="label">
              <span class="label-text">Sale Price</span>
            </label>
            <div class="join w-full">
              <span class="join-item btn btn-sm">$</span>
              <input type="number" step="0.01" placeholder="0.00" class="input input-bordered join-item w-full" />
            </div>
          </div>
          
          <div class="form-control">
            <label class="label">
              <span class="label-text">Stock Quantity</span>
              <span class="label-text-alt text-error">*Required</span>
            </label>
            <input type="number" placeholder="Enter quantity" class="input input-bordered" required />
          </div>
          
          <div class="form-control">
            <label class="label">
              <span class="label-text">Status</span>
            </label>
            <select class="select select-bordered">
              <option selected>Active</option>
              <option>Draft</option>
              <option>Out of Stock</option>
            </select>
          </div>
        </div>
        
        <div class="form-control mb-4">
          <label class="label">
            <span class="label-text">Short Description</span>
          </label>
          <textarea class="textarea textarea-bordered h-20" placeholder="Enter short description"></textarea>
        </div>
        
        <div class="form-control mb-4">
          <label class="label">
            <span class="label-text">Full Description</span>
          </label>
          <textarea class="textarea textarea-bordered h-32" placeholder="Enter full description"></textarea>
        </div>
        
        <div class="form-control mb-4">
          <label class="label">
            <span class="label-text">Product Images</span>
          </label>
          <div class="border-2 border-dashed border-base-300 rounded-lg p-4 text-center">
            <i class="fas fa-cloud-upload-alt text-3xl mb-2"></i>
            <p class="mb-2">Drag and drop images here or click to browse</p>
            <input type="file" class="file-input file-input-bordered w-full max-w-xs" multiple />
            <p class="text-xs text-gray-500 mt-2">Supported formats: JPG, PNG, WEBP. Max size: 5MB</p>
          </div>
        </div>
        
        <div class="form-control mb-4">
          <label class="label cursor-pointer">
            <span class="label-text">Featured Product</span> 
            <input type="checkbox" class="toggle toggle-primary" />
          </label>
        </div>
        
        <div class="divider">Additional Information</div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
          <div class="form-control">
            <label class="label">
              <span class="label-text">Weight (kg)</span>
            </label>
            <input type="number" step="0.01" placeholder="Enter weight" class="input input-bordered" />
          </div>
          
          <div class="form-control">
            <label class="label">
              <span class="label-text">Dimensions (cm)</span>
            </label>
            <div class="flex gap-2">
              <input type="number" step="0.1" placeholder="L" class="input input-bordered w-full" />
              <input type="number" step="0.1" placeholder="W" class="input input-bordered w-full" />
              <input type="number" step="0.1" placeholder="H" class="input input-bordered w-full" />
            </div>
          </div>
        </div>
        
        <div class="form-control mb-4">
          <label class="label">
            <span class="label-text">Tags</span>
          </label>
          <input type="text" placeholder="Enter tags separated by commas" class="input input-bordered" />
        </div>
        
        <div class="modal-action">
          <button type="button" class="btn" onclick="document.getElementById('add-product-modal').close()">Cancel</button>
          <button type="submit" class="btn btn-primary">Save Product</button>
        </div>
      </form>
    </div>
  </dialog>
  
  <!-- Edit Product Modal -->
  <dialog id="edit-product-modal" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box max-w-3xl">
      <h3 class="font-bold text-lg mb-4">Edit Product</h3>
      <form>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
          <div class="form-control">
            <label class="label">
              <span class="label-text">Product Name</span>
              <span class="label-text-alt text-error">*Required</span>
            </label>
            <input type="text" value="Wireless Headphones" class="input input-bordered" required />
          </div>
          
          <div class="form-control">
            <label class="label">
              <span class="label-text">SKU</span>
              <span class="label-text-alt text-error">*Required</span>
            </label>
            <input type="text" value="PRD-001" class="input input-bordered" required />
          </div>
          
          <div class="form-control">
            <label class="label">
              <span class="label-text">Category</span>
              <span class="label-text-alt text-error">*Required</span>
            </label>
            <select class="select select-bordered" required>
              <option disabled>Select category</option>
              <option selected>Electronics</option>
              <option>Clothing</option>
              <option>Home & Kitchen</option>
              <option>Beauty</option>
              <option>Accessories</option>
            </select>
          </div>
          
          <div class="form-control">
            <label class="label">
              <span class="label-text">Brand</span>
            </label>
            <select class="select select-bordered">
              <option disabled>Select brand</option>
              <option>Apple</option>
              <option selected>Sony</option>
              <option>Samsung</option>
              <option>LG</option>
              <option>Nike</option>
              <option>Adidas</option>
            </select>
          </div>
          
          <div class="form-control">
            <label class="label">
              <span class="label-text">Regular Price</span>
              <span class="label-text-alt text-error">*Required</span>
            </label>
            <div class="join w-full">
              <span class="join-item btn btn-sm">$</span>
              <input type="number" step="0.01" value="89.99" class="input input-bordered join-item w-full" required />
            </div>
          </div>
          
          <div class="form-control">
            <label class="label">
              <span class="label-text">Sale Price</span>
            </label>
            <div class="join w-full">
              <span class="join-item btn btn-sm">$</span>
              <input type="number" step="0.01" placeholder="0.00" class="input input-bordered join-item w-full" />
            </div>
          </div>
          
          <div class="form-control">
            <label class="label">
              <span class="label-text">Stock Quantity</span>
              <span class="label-text-alt text-error">*Required</span>
            </label>
            <input type="number" value="45" class="input input-bordered" required />
          </div>
          
          <div class="form-control">
            <label class="label">
              <span class="label-text">Status</span>
            </label>
            <select class="select select-bordered">
              <option selected>Active</option>
              <option>Draft</option>
              <option>Out of Stock</option>
            </select>
          </div>
        </div>
        
        <div class="form-control mb-4">
          <label class="label">
            <span class="label-text">Short Description</span>
          </label>
          <textarea class="textarea textarea-bordered h-20">Premium wireless headphones with noise cancellation and 30-hour battery life.</textarea>
        </div>
        
        <div class="form-control mb-4">
          <label class="label">
            <span class="label-text">Full Description</span>
          </label>
          <textarea class="textarea textarea-bordered h-32">Experience premium sound quality with these wireless headphones. The active noise cancellation technology blocks out external noise, allowing you to immerse yourself in your music or calls without distractions. With a battery life of up to 30 hours, you can enjoy your favorite content all day long without worrying about recharging. The comfortable over-ear design with memory foam ear cushions ensures comfort even during extended listening sessions.</textarea>
        </div>
        
        <div class="form-control mb-4">
          <label class="label">
            <span class="label-text">Product Images</span>
          </label>
          <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2 mb-2">
            <div class="relative">
              <img src="https://picsum.photos/id/96/100/100" alt="Product image" class="w-full h-24 object-cover rounded-lg" />
              <button type="button" class="btn btn-circle btn-xs absolute top-1 right-1 bg-base-100">
                <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="relative">
              <img src="https://picsum.photos/id/26/100/100" alt="Product image" class="w-full h-24 object-cover rounded-lg" />
              <button type="button" class="btn btn-circle btn-xs absolute top-1 right-1 bg-base-100">
                <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="relative">
              <img src="https://picsum.photos/id/119/100/100" alt="Product image" class="w-full h-24 object-cover rounded-lg" />
              <button type="button" class="btn btn-circle btn-xs absolute top-1 right-1 bg-base-100">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="border-2 border-dashed border-base-300 rounded-lg p-4 text-center">
            <i class="fas fa-cloud-upload-alt text-3xl mb-2"></i>
            <p class="mb-2">Drag and drop images here or click to browse</p>
            <input type="file" class="file-input file-input-bordered w-full max-w-xs" multiple />
            <p class="text-xs text-gray-500 mt-2">Supported formats: JPG, PNG, WEBP. Max size: 5MB</p>
          </div>
        </div>
        
        <div class="form-control mb-4">
          <label class="label cursor-pointer">
            <span class="label-text">Featured Product</span> 
            <input type="checkbox" class="toggle toggle-primary" checked />
          </label>
        </div>
        
        <div class="divider">Additional Information</div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
          <div class="form-control">
            <label class="label">
              <span class="label-text">Weight (kg)</span>
            </label>
            <input type="number" step="0.01" value="0.25" class="input input-bordered" />
          </div>
          
          <div class="form-control">
            <label class="label">
              <span class="label-text">Dimensions (cm)</span>
            </label>
            <div class="flex gap-2">
              <input type="number" step="0.1" value="18" placeholder="L" class="input input-bordered w-full" />
              <input type="number" step="0.1" value="16.5" placeholder="W" class="input input-bordered w-full" />
              <input type="number" step="0.1" value="7.8" placeholder="H" class="input input-bordered w-full" />
            </div>
          </div>
        </div>
        
        <div class="form-control mb-4">
          <label class="label">
            <span class="label-text">Tags</span>
          </label>
          <input type="text" value="headphones, wireless, audio, noise-cancellation" placeholder="Enter tags separated by commas" class="input input-bordered" />
        </div>
        
        <div class="modal-action">
          <button type="button" class="btn" onclick="document.getElementById('edit-product-modal').close()">Cancel</button>
          <button type="submit" class="btn btn-primary">Update Product</button>
        </div>
      </form>
    </div>
  </dialog>
</body>
</html>