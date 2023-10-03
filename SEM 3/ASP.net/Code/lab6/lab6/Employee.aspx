<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Employee.aspx.cs" Inherits="lab6.Employee" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <h1>Employee Information</h1>

            <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" DataSourceID="empdataSource">
            </asp:GridView>
            <asp:SqlDataSource ID="empdataSource" runat="server" ConnectionString="<%$ ConnectionStrings:EmployeeConnectionString %>" SelectCommand="SELECT [DeptId], [EmpName] FROM [Employee]"></asp:SqlDataSource>
        </div>
    </form>
</body>
</html>