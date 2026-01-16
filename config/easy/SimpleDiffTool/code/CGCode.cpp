#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    string type;
    cin >> type; cin.ignore();
    int nb_lines_v1;
    cin >> nb_lines_v1; cin.ignore();
    for (int i = 0; i < nb_lines_v1; i++) {
        string line_v1;
        getline(cin, line_v1);
    }
    int nb_lines_v2;
    cin >> nb_lines_v2; cin.ignore();
    for (int i = 0; i < nb_lines_v2; i++) {
        string line_v2;
        getline(cin, line_v2);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "diffs" << endl;
}