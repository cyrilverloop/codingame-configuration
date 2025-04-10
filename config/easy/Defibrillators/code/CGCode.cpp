#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    string lon;
    cin >> lon; cin.ignore();
    string lat;
    cin >> lat; cin.ignore();
    int n;
    cin >> n; cin.ignore();
    for (int i = 0; i < n; i++) {
        string defib;
        getline(cin, defib);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "answer" << endl;
}