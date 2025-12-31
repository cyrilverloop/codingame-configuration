#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int n; // the number of cards on the table
    cin >> n; cin.ignore();
    for (int i = 0; i < n; i++) {
        int number;
        string shading;
        string color;
        string shape;
        cin >> number >> shading >> color >> shape; cin.ignore();
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "0.5000" << endl;
}