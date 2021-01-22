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
    phone: nil,
    password: nil,
    photo: nil
  }

  describe "create user" do
    test "return user when data is valid", %{conn: conn} do
      conn = post(conn, Routes.user_path(conn, :create), user: @create_attrs)
      assert 200 = conn.status
      assert {:ok, user} = Jason.decode(conn.resp_body)
    end

    test "return errors when data is invalid", %{conn: conn} do
      conn = post(conn, Routes.user_path(conn, :create), user: @invalid_attrs)
      assert 400 = conn.status
      assert {:ok, %{"error" => "error"}} = Jason.decode(conn.resp_body)
    end

    test "return errors when email or document exist is invalid", %{conn: conn} do
      conn = post(conn, Routes.user_path(conn, :create), user: @create_attrs)
      conn = post(conn, Routes.user_path(conn, :create), user: @create_attrs)
      assert 400 = conn.status
      assert {:ok, %{"error" => "error"}} = Jason.decode(conn.resp_body)
    end
  end
end
