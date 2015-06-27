###
# Compass
###

# Change Compass configuration
# compass_config do |config|
#   config.output_style = :compact
# end

# ###
# # Page options, layouts, aliases and proxies
# ###

# # Per-page layout changes:
# #
# # With no layout
# # page "/path/to/file.html", :layout => false
# #
# # With alternative layout
# # page "/path/to/file.html", :layout => :otherlayout
# #
# # A path which all have the same layout
# # with_layout :admin do
# #   page "/admin/*"
# # end

# # Proxy pages (http://middlemanapp.com/dynamic-pages/)
# # proxy "/this-page-has-no-template.html", "/template-file.html", :locals => {
# #  :which_fake_page => "Rendering a fake page with a local variable" }

# ###
# # Helpers
# ###

# # Automatic image dimensions on image_tag helper
# # activate :automatic_image_sizes

# # Reload the browser automatically whenever files change
# set :file_watcher_ignore, [
#     /^\.idea\//,
#     /^\.bundle\//,
#     /^\.sass-cache\//,
#     /^\.git\//,
#     /^\.gitignore$/,
#     /\.DS_Store/,
#     /^build\//,
#     /^\.rbenv-.*$/,
#     /^Gemfile$/,
#     /^Gemfile\.lock$/,
#     /~$/,
#     /(^|\/)\.?#/
# ]
activate :livereload

# activate :relative_assets
# Methods defined in the helpers block are available in templates
# helpers do
#   def some_helper
#     "Helping"
#   end
# end


set :css_dir, 'stylesheets'

set :js_dir, 'javascripts'

set :images_dir, 'images'

set :fonts_dir, 'fonts'

set :build_dir, '../web/app/themes/whitevisions_theme/dist'


after_configuration do
  @bower_config = JSON.parse(IO.read("#{root}/.bowerrc"))
  Dir.glob(File.join("#{root}", @bower_config["directory"], "*", "fonts")) do |f|
    sprockets.append_path f
  end
  sprockets.append_path File.join "#{root}", @bower_config["directory"]
end







activate :deploy do |deploy|
  deploy.method = :rsync
  deploy.host   = 'vps.pixeloid.hu'
  deploy.path   = '/var/www/virtual/pixeloid.hu/htdocs/whitevisions'
  # Optional Settings
  deploy.user  = 'root' # no default
  # deploy.port  = 5309 # ssh port, default: 22
  # deploy.clean = true # remove orphaned files on remote host, default: false
  deploy.flags = '-rltgoDvzO --no-p --del' # add custom flags, default: -avz
end

# Build-specific configuration
configure :build do
  # For example, change the Compass output style for deployment
  activate :minify_css

  # Minify Javascript on build
  activate :minify_javascript

  # Enable cache buster
  activate :asset_hash, :ignore => [/\.css$/, /\.js$/]

  # Use relative URLs
  activate :relative_assets

  # Or use a different image path
  #set :http_path, "/Content/images/"
end
