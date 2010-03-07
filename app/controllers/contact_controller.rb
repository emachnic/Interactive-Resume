class ContactController < ApplicationController
  navigation :contact
  def index
  end

  def send_mail
    Emailer::deliver_contact_email(params[:email])
  end

end
