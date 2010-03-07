p "** Ensuring the Sass::RAILS_LOADED is undefined for regeneration"
if defined?(Sass::RAILS_LOADED)
  module Sass
    remove_const("RAILS_LOADED")
  end
end
