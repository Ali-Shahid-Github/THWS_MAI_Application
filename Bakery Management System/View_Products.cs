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
    public partial class View_Products : Form
    {
        public View_Products()
        {
            InitializeComponent();
        }

        private void View_Products_Load(object sender, EventArgs e)
        {
            
            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("SELECT Pro_ID, Pro_Name,Pro_Stock, PRODUCTS.Cat_ID, C.Cat_Name as 'Cat Name'" +
                                                " from PRODUCTS INNER JOIN CATEGORY AS C on PRODUCTS.Cat_ID = C.Cat_ID", con);
            SqlDataAdapter adapter = new SqlDataAdapter(command);
            DataSet ds = new DataSet();
            adapter.Fill(ds);

            for (int i = 0; i < ds.Tables[0].Rows.Count; i++)
            {
                
                DataGridViewRow row = new DataGridViewRow();

                row.CreateCells(dataGridView_Products);
                row.Cells[0].Value = ds.Tables[0].Rows[i].ItemArray[0].ToString();
                row.Cells[1].Value = ds.Tables[0].Rows[i].ItemArray[1].ToString();
                row.Cells[2].Value = ds.Tables[0].Rows[i].ItemArray[2].ToString();
                row.Cells[3].Value = ds.Tables[0].Rows[i].ItemArray[3].ToString();
                row.Cells[4].Value = ds.Tables[0].Rows[i].ItemArray[4].ToString();
                dataGridView_Products.Rows.Add(row);

            }
        }

        private void dataGridView_Products_CellMouseDoubleClick(object sender, DataGridViewCellMouseEventArgs e)
        {
            DataGridViewRow row = dataGridView_Products.Rows[e.RowIndex];

            string to_delete = row.Cells[0].Value.ToString();

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("DELETE from PRODUCTS where Pro_ID=@a", con);

            command.Parameters.AddWithValue("@a", to_delete);

            command.ExecuteNonQuery();
            MessageBox.Show("Record has been Deleted", "Deleted", MessageBoxButtons.OK, MessageBoxIcon.Information);


            con.Close();

            this.Close();
        }

        private void populate_cat_data()
        {

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("SELECT  Cat_ID, Cat_Name FROM CATEGORY ", con);
            SqlDataAdapter adapter = new SqlDataAdapter(command);
            command.ExecuteNonQuery();

            con.Close();

            DataSet dataSet = new DataSet();
            adapter.Fill(dataSet);
            up_cat_id_combo_box.Items.Clear();

            for (int i = 0; i < dataSet.Tables[0].Rows.Count; i++)
            {

                string id = dataSet.Tables[0].Rows[i].ItemArray[0].ToString();
                string role = dataSet.Tables[0].Rows[i].ItemArray[1].ToString();
                up_cat_id_combo_box.Items.Add(id + " " + role);

            }


        }

        private void dataGridView_Products_RowEnter(object sender, DataGridViewCellEventArgs e)
        {
            DataGridViewRow row = dataGridView_Products.Rows[e.RowIndex];

            up_pro_id.Text = row.Cells[0].Value.ToString();
            up_pro_name.Text = row.Cells[1].Value.ToString();
            up_pro_stock.Text = row.Cells[2].Value.ToString();

            populate_cat_data();
            up_cat_id_combo_box.SelectedItem = row.Cells[3].Value.ToString();
            up_cat_id_combo_box.Text = row.Cells[3].Value.ToString();
        }

        private void up_pro_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("UPDATE PRODUCTS SET Pro_Name=@a,Pro_Stock=@b, Cat_ID=@c WHERE Pro_ID=@d", con);
            command.Parameters.AddWithValue("@a", up_pro_name.Text.ToString());
            command.Parameters.AddWithValue("@b", up_pro_stock.Text.ToString());

            string rol = up_cat_id_combo_box.Text.ToString();
            string[] r = { };
            if (rol.Contains(" "))
            {
                r = rol.Split(' ');
                command.Parameters.AddWithValue("@c", Convert.ToInt32(r[0]));
            }
            else
                command.Parameters.AddWithValue("@c", Convert.ToInt32(rol));

            command.Parameters.AddWithValue("@d", Convert.ToInt32(up_pro_id.Text.ToString()));

            command.ExecuteNonQuery();

            con.Close();
            MessageBox.Show("Record Has been Updated", "Update", MessageBoxButtons.OK, MessageBoxIcon.Information);
            this.Close();
        }
    }
}
