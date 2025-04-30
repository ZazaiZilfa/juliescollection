<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-base-200">
  <div class="drawer lg:drawer-open">
    <input id="drawer-toggle" type="checkbox" class="drawer-toggle" />
    
    <div class="drawer-content flex flex-col">
      <!-- Navbar -->
      <div class="navbar bg-base-100 shadow-md lg:hidden">
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
          <h1 class="text-2xl font-bold">Dashboard</h1>
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
        
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
          <div class="stats shadow bg-primary text-primary-content">
            <div class="stat">
              <div class="stat-title">Total Users</div>
              <div class="stat-value">4,200</div>
              <div class="stat-desc">↗︎ 40 (2%)</div>
            </div>
          </div>
          
          <div class="stats shadow bg-secondary text-secondary-content">
            <div class="stat">
              <div class="stat-title">Page Views</div>
              <div class="stat-value">12.6K</div>
              <div class="stat-desc">↗︎ 340 (14%)</div>
            </div>
          </div>
          
          <div class="stats shadow bg-accent text-accent-content">
            <div class="stat">
              <div class="stat-title">New Registrations</div>
              <div class="stat-value">1,200</div>
              <div class="stat-desc">↘︎ 90 (14%)</div>
            </div>
          </div>
          
          <div class="stats shadow">
            <div class="stat">
              <div class="stat-title">Revenue</div>
              <div class="stat-value text-success">$25,600</div>
              <div class="stat-desc text-success">↗︎ $4,200 (22%)</div>
            </div>
          </div>
        </div>
        
        <!-- Recent Users Table -->
        <div class="bg-base-100 rounded-box shadow-md p-4 mb-6">
          <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Recent Users</h2>
            <a href="users.html" class="btn btn-sm btn-primary">View All</a>
          </div>
          
          <div class="overflow-x-auto">
            <table class="table table-zebra">
              <thead>
                <tr>
                  <th></th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="avatar">
                      <div class="w-8 rounded-full">
                        <img src="https://api.dicebear.com/6.x/initials/svg?seed=JD" alt="Avatar" />
                      </div>
                    </div>
                  </td>
                  <td>John Doe</td>
                  <td>john@example.com</td>
                  <td>Admin</td>
                  <td><div class="badge badge-success">Active</div></td>
                  <td>
                    <div class="flex gap-2">
                      <button class="btn btn-xs btn-ghost"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-xs btn-ghost text-error"><i class="fas fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="avatar">
                      <div class="w-8 rounded-full">
                        <img src="https://api.dicebear.com/6.x/initials/svg?seed=JS" alt="Avatar" />
                      </div>
                    </div>
                  </td>
                  <td>Jane Smith</td>
                  <td>jane@example.com</td>
                  <td>Editor</td>
                  <td><div class="badge badge-success">Active</div></td>
                  <td>
                    <div class="flex gap-2">
                      <button class="btn btn-xs btn-ghost"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-xs btn-ghost text-error"><i class="fas fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="avatar">
                      <div class="w-8 rounded-full">
                        <img src="https://api.dicebear.com/6.x/initials/svg?seed=RJ" alt="Avatar" />
                      </div>
                    </div>
                  </td>
                  <td>Robert Johnson</td>
                  <td>robert@example.com</td>
                  <td>User</td>
                  <td><div class="badge badge-warning">Pending</div></td>
                  <td>
                    <div class="flex gap-2">
                      <button class="btn btn-xs btn-ghost"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-xs btn-ghost text-error"><i class="fas fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="avatar">
                      <div class="w-8 rounded-full">
                        <img src="https://api.dicebear.com/6.x/initials/svg?seed=EW" alt="Avatar" />
                      </div>
                    </div>
                  </td>
                  <td>Emily Wilson</td>
                  <td>emily@example.com</td>
                  <td>User</td>
                  <td><div class="badge badge-error">Inactive</div></td>
                  <td>
                    <div class="flex gap-2">
                      <button class="btn btn-xs btn-ghost"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-xs btn-ghost text-error"><i class="fas fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="avatar">
                      <div class="w-8 rounded-full">
                        <img src="https://api.dicebear.com/6.x/initials/svg?seed=MB" alt="Avatar" />
                      </div>
                    </div>
                  </td>
                  <td>Michael Brown</td>
                  <td>michael@example.com</td>
                  <td>Editor</td>
                  <td><div class="badge badge-success">Active</div></td>
                  <td>
                    <div class="flex gap-2">
                      <button class="btn btn-xs btn-ghost"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-xs btn-ghost text-error"><i class="fas fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        
        <!-- Recent Activity -->
        <div class="bg-base-100 rounded-box shadow-md p-4">
          <h2 class="text-xl font-bold mb-4">Recent Activity</h2>
          <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">
            <li>
              <div class="timeline-middle">
                <i class="fas fa-circle text-primary"></i>
              </div>
              <div class="timeline-start md:text-end mb-10">
                <time class="font-mono italic">Just now</time>
                <div class="text-lg font-black">New user registered</div>
                User Alex Johnson has registered a new account.
              </div>
              <hr/>
            </li>
            <li>
              <hr/>
              <div class="timeline-middle">
                <i class="fas fa-circle text-primary"></i>
              </div>
              <div class="timeline-end mb-10">
                <time class="font-mono italic">2 hours ago</time>
                <div class="text-lg font-black">System update completed</div>
                The system has been updated to version 2.4.0.
              </div>
              <hr/>
            </li>
            <li>
              <hr/>
              <div class="timeline-middle">
                <i class="fas fa-circle text-primary"></i>
              </div>
              <div class="timeline-start md:text-end mb-10">
                <time class="font-mono italic">3 hours ago</time>
                <div class="text-lg font-black">New order received</div>
                Order #38492 has been placed for $1,200.
              </div>
              <hr/>
            </li>
            <li>
              <hr/>
              <div class="timeline-middle">
                <i class="fas fa-circle text-primary"></i>
              </div>
              <div class="timeline-end mb-10">
                <time class="font-mono italic">Yesterday</time>
                <div class="text-lg font-black">Server maintenance</div>
                Server maintenance completed successfully.
              </div>
            </li>
          </ul>
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
          <li><a href="index.html" class="active"><i class="fas fa-home mr-2"></i>Dashboard</a></li>
          <li><a href="users.html"><i class="fas fa-users mr-2"></i>Users</a></li>
          <li><a href="products.html"><i class="fas fa-box mr-2"></i>Products</a></li>
          <li><a href="orders.html"><i class="fas fa-shopping-cart mr-2"></i>Orders</a></li>
          
          <li class="menu-title mt-4">Settings</li>
          <li><a href="profile.html"><i class="fas fa-user mr-2"></i>Profile</a></li>
          <li><a href="settings.html"><i class="fas fa-cog mr-2"></i>Settings</a></li>
          
          <li class="mt-4"><a href="#" class="text-error"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a></li>
        </ul>
      </aside>
    </div>
  </div>
</body>
</html>