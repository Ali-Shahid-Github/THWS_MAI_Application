using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Bakery_Management_System
{
    public partial class View_Employee : Form
    {
        public View_Employee()
        {
            InitializeComponent();
        }

        private void View_Employee_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'bMASDataSet1.EMPLOYEE' table. You can move, or remove it, as needed.
            this.eMPLOYEETableAdapter.Fill(this.bMASDataSet1.EMPLOYEE);

        }

        

        private void dataGridView2_Emp_RowEnter(object sender, DataGridViewCellEventArgs e)
        {
            DataGridViewRow row = dataGridView2_Emp.Rows[e.RowIndex];

            up_emp_id.Text = row.Cells[0].Value.ToString();
            up_emp_date.Text = row.Cells[2].Value.ToString();
            populate_role_data();
            up_employee_Role.SelectedItem= row.Cells[3].Value.ToString();
            up_employee_Role.Text = row.Cells[3].Value.ToString();
            up_emp_name.Text = row.Cells[1].Value.ToString();
        }

        private void populate_role_data()
        {

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("SELECT  Rol_ID, Rol_Name FROM EMPLOYEE_Role ", con);
            SqlDataAdapter adapter = new SqlDataAdapter(command);
            command.ExecuteNonQuery();

            con.Close();

            DataSet dataSet = new DataSet();
            adapter.Fill(dataSet);
            up_employee_Role.Items.Clear();

            for (int i = 0; i < dataSet.Tables[0].Rows.Count; i++)
            {

                string id = dataSet.Tables[0].Rows[i].ItemArray[0].ToString();
                string role = dataSet.Tables[0].Rows[i].ItemArray[1].ToString();
                up_employee_Role.Items.Add(id + " " + role);

            }

        }

        private void add_cus_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("UPDATE EMPLOYEE SET Emp_Name=@a,Emp_JoinDate=@b, Rol_ID=@c WHERE Emp_ID=@d", con);
            command.Parameters.AddWithValue("@a", up_emp_name.Text.ToString());
            command.Parameters.AddWithValue("@b", up_emp_date.Text.ToString());
            string rol = up_employee_Role.SelectedItem.ToString();
            string[] r = rol.Split(' ');
            command.Parameters.AddWithValue("@c", r[0]);
            command.Parameters.AddWithValue("@d", up_emp_id.Text.ToString());

            command.ExecuteNonQuery();

            con.Close();
            MessageBox.Show("Record Has been Updated", "Update", MessageBoxButtons.OK, MessageBoxIcon.Information);
            this.Close();
        }
    }
}
