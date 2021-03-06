set :stage, :staging
set :wpcli_remote_url, 'http://wv.dev.pixeloid.hu'


set :deploy_to, -> { "/var/www/virtual/pixeloid.hu/dev/wv/" }


# Simple Role Syntax
# ==================
role :app, %w{vu2001@pixeloid.hu}
role :web, %w{vu2001@pixeloid.hu}
role :db,  %w{vu2001@pixeloid.hu}

# Extended Server Syntax
# ======================
server 'pixeloid.hu', user: 'vu2001', roles: %w{web app db}

# you can set custom ssh options
# it's possible to pass any option but you need to keep in mind that net/ssh understand limited list of options
# you can see them in [net/ssh documentation](http://net-ssh.github.io/net-ssh/classes/Net/SSH.html#method-c-start)
# set it globally
 # set :ssh_options, {
 #   keys: %w(~/.ssh/id_rsa),
 #   forward_agent: false,
 #   auth_methods: %w(password)
 #  }

fetch(:default_env).merge!(wp_env: :staging)

