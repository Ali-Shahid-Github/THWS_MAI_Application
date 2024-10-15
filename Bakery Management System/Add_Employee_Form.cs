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
    public partial class Add_Employee_Form : Form
    {
        public Add_Employee_Form()
        {
            InitializeComponent();


            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("SELECT  Rol_ID, Rol_Name FROM EMPLOYEE_Role ", con);
            SqlDataAdapter adapter = new SqlDataAdapter(command);
            command.ExecuteNonQuery();

            con.Close();

            DataSet dataSet = new DataSet();
            adapter.Fill(dataSet);
            employee_Role.Items.Clear();

            for (int i = 0; i < dataSet.Tables[0].Rows.Count; i++)
            {

                string id = dataSet.Tables[0].Rows[i].ItemArray[0].ToString();
                string role = dataSet.Tables[0].Rows[i].ItemArray[1].ToString();
                employee_Role.Items.Add(id + " " + role);

            }

        }

        private void Add_Employee_Form_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'bMASDataSet1.EMPLOYEE_Role' table. You can move, or remove it, as needed.
            this.eMPLOYEE_RoleTableAdapter.Fill(this.bMASDataSet1.EMPLOYEE_Role);

        }

        private void uname_TextChanged(object sender, EventArgs e)
        {

        }

        
        private void Add_employee_Click(object sender, EventArgs e)
        {
            if (employee_name.Text != "" && employee_Role.Text != "")
            {
                string rol = employee_Role.SelectedItem.ToString();
                string[] r = rol.Split(' ');

                
                SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
                con.Open();

                SqlCommand command = new SqlCommand("INSERT INTO EMPLOYEE(Emp_Name, Rol_ID) VALUES(@a,@b)", con);
                command.Parameters.AddWithValue("@a", employee_name.Text.ToString());
                command.Parameters.AddWithValue("@b", r[0]);
                

                command.ExecuteNonQuery();
                con.Close();

                MessageBox.Show("Added Sucessfull", "Added Complete", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            else
                MessageBox.Show("Some Fiedls are missing\nEnter Data again", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
        }

        private void employee_Role_SelectedIndexChanged(object sender, EventArgs e)
        {

        }
    }
}
