set :stage, :production
set :wpcli_remote_url, 'http://www.whitevisions.hu'
set :tmp_dir, '/var/www/virtual/whitevisions.com/tmp'

set :deploy_to, -> { "/var/www/virtual/whitevisions.com" }


# Simple Role Syntax
# ==================
role :app, %w{vu2075@pixeloid.hu}
role :web, %w{vu2075@pixeloid.hu}
role :db,  %w{vu2075@pixeloid.hu}

# Extended Server Syntax
# ======================
server 'pixeloid.hu', user: 'vu2075', roles: %w{web app db}

# you can set custom ssh options
# it's possible to pass any option but you need to keep in mind that net/ssh understand limited list of options
# you can see them in [net/ssh documentation](http://net-ssh.github.io/net-ssh/classes/Net/SSH.html#method-c-start)
# set it globally
 # set :ssh_options, {
 #   keys: %w(~/.ssh/id_rsa),
 #   forward_agent: false,
 #   auth_methods: %w(password)
 #  }

fetch(:default_env).merge!(wp_env: :production)

