defmodule DirectHomeApiWeb.UserControllerTest do
  use DirectHomeApiWeb.ConnCase

  alias DirectHomeApi.User

  @create_attrs %{
    document: 95_935_781,
    document_type: "dni",
    email: "bian251091@gmail.com",
    name: "Carlos",
    last_name: "Hernandez",
    phone: 1_173_677_873,
    password: "boni2510*",
    photo: "algunaphoto"
  }

  @invalid_attrs %{
    document: nil,
    document_type: nil,
    email: nil,
    name: nil,
    last_name: nil,
    phone: nil,
    password: nil,
    photo: nil
  }

  describe "create user" do
    test "return user when data is valid", %{conn: conn} do
      conn = post(conn, Routes.user_path(conn, :create), user: @create_attrs)
      assert
    end

    # test "return errors when data is invalid", %{conn: conn} do
    #  conn = post(conn, Routes.post_path(conn, :create), post: @invalid_attrs)
    #  assert html_response(conn, 200) =~ "New Post"
    # end
  end
end
