#include<iostream>
#include<cmath>
#include<algorithm>
#include<cstring>
#include<iomanip>
using namespace std;

const int n=4;//Inverse matrix order, please modify the value of n for different order matrix
int main()
{
	double a[n][n],inv_a[n][n];
	memset(a, 0, n * n * sizeof(double));
	printf("Please input the %dX%d matrix A:\n",n,n);
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			cin>>a[i][j];
		}
	}
	void out(double matrix[][n], const char* s);
	void product(double matrix1[][n], double matrix2[][n], double matrix_result[n][n]);
	//initialization
	double l[n][n], u[n][n], c[n][n], ad_l[n][n], ad_u[n][n];
	memset(inv_a, 0, n * n * sizeof(double));
	memset(l, 0, n * n * sizeof(double));
	memset(u, 0, n * n * sizeof(double));
	memset(c, 0, n * n * sizeof(double));
	memset(ad_l, 0, n * n * sizeof(double));
	memset(ad_u, 0, n * n * sizeof(double));
	

	//LU decomposition
	for (int i = 0; i < n; i++)
		l[i][i] = 1;
	for (int i = 0; i < n - 1; i++)
	{
		for (int j = i; j < n; j++)
		{
			double tem = 0;
			for (int k = 0; k < i; k++)
				tem += l[i][k] * u[k][j];
			u[i][j] = a[i][j] - tem;
		}
		for (int j = i + 1; j < n; j++)
		{
			double tem = 0;
			for (int k = 0; k < i; k++)
				tem += l[j][k] * u[k][i];
			l[j][i] = (a[j][i] - tem) / u[i][i];
		}
	}
	u[n - 1][n - 1] = a[n - 1][n - 1];
	for (int i = 0; i < n - 1; i++)
		u[n - 1][n - 1] -= l[n - 1][i] * u[i][n - 1];
	//Matrix L
	//out(l, "Matrix L");
	//Matrix U
	//out(u, "Matrix U");
	//L*U
	//product(l,u, c);
	//out(c, "Matrix L*U");


	//U's inverse matrix
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			if (i > j) ad_u[i][j] = 0;
			else if (i == j)
			{
				ad_u[i][j] = 1;
				for (int k = 0; k < n; k++)
					if (k != j)
						ad_u[i][j] *= u[k][k];
			}
			else if (j - i == 1)
			{
				ad_u[i][j] = -u[i][j];
				for (int k = 0; k < n; k++)
					if (k != i && k != j)
						ad_u[i][j] *= u[k][k];
			}
			else if (j - i >= 2)
			{
				double deltas_aii = 1;
				for (int k = 0; k < n; k++)
					if (k < i || k > j)
						deltas_aii *= u[k][k];
				int permutation[n];
				for (int t = 0; t < j - i; t++) permutation[t] = i + t + 1;
				double sum = 0;
				do
				{
					int cnt = 0;
					for (int t2 = 0; t2 < j - i; t2++)
						for (int t3 = t2; t3 < j - i; t3++)
							if (permutation[t3] < permutation[t2]) cnt++;
					double mul = 1;
					for (int t1 = i; t1 < j; t1++)
                        mul *= u[t1][permutation[t1 - i]];
					if ((j - i + 1) % 2 == 0)mul *= -1;
					if (cnt % 2 == 0) sum += mul;
					else sum -= mul;
				} while (next_permutation(permutation, permutation + j - i));
				ad_u[i][j] = sum * deltas_aii;
			}
		}
	}
	double det_u = 1;
	for (int k = 0; k < n; k++) det_u *= u[k][k];
	if (det_u < 1e-16)
	{
		printf("The matrix is ??irreversible, please check the input!\n");
		return 0;
	}
	for (int i = 0; i < n; i++)
		for (int j = 0; j < n; j++)
			ad_u[i][j] /= det_u;
	//inv_U
	//out(ad_u, "inv_U");
	//U*U-1
	//memset(c, 0, n*n * sizeof(double));
	//product(u, ad_u, c);
	//out(c, "Matrix U*U-1");


	//The inverse matrix of l
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			if (i < j) ad_l[i][j] = 0;
			else if (i == j)
			{
				ad_l[i][j] = 1;
				for (int k = 0; k < n; k++)
					if (k != j)
						ad_l[i][j] *= l[k][k];
			}
			else if (i - j == 1)
			{
				ad_l[i][j] = -l[i][j];
				for (int k = 0; k < n; k++)
					if (k != i && k != j)
						ad_l[i][j] *= l[k][k];
			}
			else if (i - j >= 2)
			{
				double deltas_aii = 1;
				for (int k = 0; k < n; k++)
					if (k < i || k > j)
						deltas_aii *= l[i][i];
				int permutation[n];
				for (int t = 0; t < i - j; t++) permutation[t] = j + t + 1;
				double sum = 0;
				do
				{
					int cnt = 0;
					for (int t2 = 0; t2 < i - j; t2++)
						for (int t3 = t2; t3 < i - j; t3++)
							if (permutation[t3] < permutation[t2]) cnt++;
					double mul = 1;
					for (int t1 = j; t1 < i; t1++) 
                        mul *= l[permutation[t1 - j]][t1];
					if ((i - j + 1) % 2 == 0)mul *= -1;
					if (cnt % 2 == 0) sum += mul;
					else sum -= mul;
				} while (next_permutation(permutation, permutation + i - j));
				ad_l[i][j] = sum * deltas_aii;
			}
		}
	}
	double det_l = 1;
	for (int k = 0; k < n; k++) det_l *= l[k][k];
	if (det_u < 1e-16)
	{
		printf("The matrix is ??irreversible, please check the input!\n");
		return 0;
	}
	for (int i = 0; i < n; i++)
		for (int j = 0; j < n; j++)
			ad_l[i][j] /= det_l;
	//Matrix inv_L
	//out(ad_l, "Matrix inv_L=");
	//L*L-1
	//memset(c, 0, n*n * sizeof(double));
	//product(l, ad_l, c);
	//out(c, "Matrix L*inv_L=");


	//Matrix a
	out(a, "Matrix a=");
	//inv_a
	product(ad_u, ad_l, inv_a);
	out(inv_a, "Inverse matrix inv_a=");

	//Verify a*inv_a
//	memset(c, 0, n * n * sizeof(double));
//	product(a, inv_a, c);
//	out(c, "Matrix a*inv_a=");

//	system("pause");
	return 0;
	
}




void out(double matrix[][n], const char* s)
{
	cout << s << endl;
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
			fabs(*(*(matrix + i) + j))<1e-10? cout << 0 << '\t':cout <<fixed<< *(*(matrix + i) + j) << '\t';
		cout << endl;
	}
	cout << endl;
}

void product(double matrix1[n][n], double matrix2[n][n], double matrix_result[n][n])
{
	for (int i = 0; i < n; i++)
		for (int j = 0; j < n; j++)
			for (int k = 0; k < n; k++)
				matrix_result[i][j] += matrix1[i][k] * matrix2[k][j];
}

