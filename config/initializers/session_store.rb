# Be sure to restart your server when you modify this file.

# Your secret key for verifying cookie session data integrity.
# If you change this key, all old sessions will become invalid!
# Make sure the secret is at least 30 characters and all random, 
# no regular words or you'll be exposed to dictionary attacks.
ActionController::Base.session = {
  :key         => '_ir.broadmac.net_session',
  :secret      => '13cb83d1108ad320e171f8432da54cda11539399cf7b7b2e0257e3586d241a23e32d5f1aaa01478f9897416ed5426baf5608785f945e8b1af3d4c1f7d6397f02'
}

# Use the database for sessions instead of the cookie-based default,
# which shouldn't be used to store highly confidential information
# (create the session table with "rake db:sessions:create")
# ActionController::Base.session_store = :active_record_store
